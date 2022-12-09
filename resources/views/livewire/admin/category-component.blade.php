<div>
    <h3>Categories</h3>

    <form  wire.submit.prevent="storecategory" class="mt-3 form">
        <div class="form-group">
            <label for="title">Category Title</label>
            <input type="text" wire:model='title' id="" class="form-control">
        </div>
        @error('title')
            <span class="error text-danger">{{ $message }}</span>

        @enderror
        <div class="form-group">
            <label for="slug">Category Title</label>
            <input type="text" wire:model='slug' id="" class="form-control">
        </div>
        @error('slug')
        <span class="error text-danger">{{ $message }}</span>

    @enderror
        <div class="form-group">
            <label for="banner">Category Title</label>
            <input type="file" wire:model='banner' id="" class="form-control">
        </div>
        @error('banner')
        <span class="error text-danger">{{ $message }}</span>

    @enderror
        <button type="submit" class="btn btn-primary">Save</button>
    </form>



    <div class="card">
        <div class="card-header">
            <h3>All Categories</h3>
            <div class="">
                <a href="" class="btn btn-primary  flot-end"><i class="fa fa-plus"></i> Add New Category</a>
            </div>
        </div>
        <div class="card-body pt-2">
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
                        <td>{{ $cat->banner }}</td>
                        <td>{{ $cat->category }}</td>
                        <td>{{ $cat->slug }}</td>
                        <td>{{ $cat->banner }}</td>
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
