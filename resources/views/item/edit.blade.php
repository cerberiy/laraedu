
<form method="POST" action="/item/update/{{ $item->id }}">

                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value='{{ $item->name }}'>
                    </div>
                    <div class="form-group">
                        <label for="desciption">Description</label>
                        <textarea class="form-control" id="desciption" name="description" rows="3" value="">{{ $item->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>