<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Http\Resources\ListingResource;
use App\Http\Resources\ListingCollection;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Illuminate\Http\Request;
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        $listings = Listing::query();
        if ($request->availability !=null)
        {   
            $listings = $listings->where('availability', $request->availability);
            
        }
        if ($request->price !=null)
        {   
            $min_max = array_map(
                function($v){ return (int)$v; }, explode(',', $request->price));
            
            $listings = $listings->whereBetween('price', $min_max);
            
        }
        if ($request->square_meters !=null)
        {   
            $min_max = array_map(
                function($v){ return (int)$v; }, explode(',', $request->square_meters));
            
            $listings = $listings->whereBetween('square_meters', $min_max);
            
        }
        if ($request->location !=null)
        {   
            $locations = explode(',', $request->location);
            $listings = $listings->whereIn('location', $locations);
        }
        if ($request->type !=null)
        {   
            dd($request->types);
            $types = explode(',', $request->types);
            
            $listings = $listings->whereHas(
                'listingTypes', 
                function($query) use ($types){
                    $query->whereIn('name', $types);
                }
            );
                
        }

        
        $listes =  ListingResource::collection($listings->get());
        return view('listings.index')->with('listings', $listes);
        return $listings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return new ListingResource(Listing::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListingRequest  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListingRequest $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
