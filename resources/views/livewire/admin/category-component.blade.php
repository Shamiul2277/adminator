<div>
    <h3>Categories</h3>

    <form  wire:submit.prevent="storecategory" class="mt-3 form">
        <div class="form-group">
            <label for="title">Category Title</label>
            <input type="text" name="category" wire:model='category' id="" class="form-control">
        </div>
        @error('category') <span class="error text-danger">{{ $message }}</span>@enderror
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug"  id="" class="form-control"  wire:model='slug' wire:keyUp='generateSlug'>
        </div>
        @error('slug')<span class="error text-danger">{{ $message }}</span>@enderror
        <div class="form-group">
            <label for="banner">Category Banner</label>
            <input type="file" name="banner" wire:model='banner' id="" class="form-control">
        </div>
        @error('banner')<span class="error text-danger">{{ $message }}</span>@enderror
        <button type="submit" class="btn btn-primary">Save</button>
        <div class="row">
            @if ($banner)
            <div class="col-3">
                <img src="{{ $banner->temporaryUrl() }}" width="100%" height="auto">
            </div>

            @endif

        </div>
    </form>



    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h3>All Categories</h3>
                </div>
                <div class="col-6 justify-content-end">
                    <a href="#addNewModal" data-bs-toggle="modal" class="btn btn-primary "><i class="fa fa-plus"></i> Add New Category</a>
                </div>
            </div>
        </div>
        <div class="pt-2 card-body">
            @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>

        @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Banner</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ($categories as $cat )
                    <tr>
                        <td>{{ $i }}</td>
                        <td><img src="{{ asset('Uploads/'. $cat->banner) }}" width="80px" height="60px" alt="{{ $cat->category }}"></td>
                        <td>{{ $cat->category }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>
                            <a href="#" wire:click.prevent="openEditModal" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
                            <a href="#" wire:click.prevent="openDeleteModal" class="btn btn-danger"><i class="fa fa-times"></i>delete</a>
                        </td>
                    </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


{{--  Add New Modal  --}}

!-- Modal -->
<div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  wire:submit.prevent="storecategory" class="mt-3 form">
            <div class="form-group">
                <label for="title">Category Title</label>
                <input type="text" name="category" wire:model='category' id="" class="form-control">
            </div>
            @error('category') <span class="error text-danger">{{ $message }}</span>@enderror
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug"  id="" class="form-control"  wire:model='slug' wire:keyUp='generateSlug'>
            </div>
            @error('slug')<span class="error text-danger">{{ $message }}</span>@enderror
            <div class="form-group">
                <label for="banner">Category Banner</label>
                <input type="file" name="banner" wire:model='banner' id="" class="form-control">
            </div>
            @error('banner')<span class="error text-danger">{{ $message }}</span>@enderror
            <button type="submit" class="btn btn-primary">Save</button>
            <div class="row">
                @if ($banner)
                <div class="col-3">
                    <img src="{{ $banner->temporaryUrl() }}" width="100%" height="auto">
                </div>

                @endif

            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
