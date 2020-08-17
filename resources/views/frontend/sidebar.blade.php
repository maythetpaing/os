 <div class="col-lg-2">


        <h3 class="mt-4">Shop Name</h3>
        <div class="list-group">
        	@foreach($subcategories as $subcategory)
          <a href="#" class="list-group-item filter" data-id="{{$subcategory->id}}">{{$subcategory->name}}</a>
          @endforeach
         
        </div>

      </div>
