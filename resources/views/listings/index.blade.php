<div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-tachometer-alt ml-2"></i>listings</h3><hr>
    
    <form action="{{ route('listings.index') }}" method="get">
        
        
    
        <div class="form-group col-md-4 float-left">
            <label for="exampleFormControlSelect1">Location</label>
            
            <select name="location[]" multiple class="form-control" id="exampleFormControlSelect1">
            <option value='Athens'>Athens</option>
            <option value='Thessaloniki'>Thessaloniki</option>
            <option value='Patra'>Patra</option>
            </select >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Types</label>
            <select name="type[]" multiple class="form-control" id="exampleFormControlSelect2">
            <option value='Loft'>Loft</option>
            <option value='Studio'>Studio</option>
            <option value='Apartment'>Apartment</option>
            </select>
        </div>
        <label for="square_meters">Square Meters:</label>
        <input type="text" id="square_meters" name="square_meters"><br><br>
        <label for="lname">price:</label>
        <input type="text" id="price" name="price"><br><br>
        <input type="submit" value="Submit">

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>availability</th>
                    <th>type</th>
                    <th>location</th>
                    <th>square_meters</th>
                    <th>price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listings as $listing)
                    <tr>
                        <td>{{ $listing->id }}</td>
                        <td>{{ $listing->availability}}</td>
                        <td>{{ $listing->showTypes()}}</td>
                        <td>{{ $listing->location}}</td>
                        <td>{{ $listing->square_meters}}</td>
                        <td>{{ $listing->price}}</td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </form>
    {{-- {!! $listings->links() !!} --}}
    
</div>