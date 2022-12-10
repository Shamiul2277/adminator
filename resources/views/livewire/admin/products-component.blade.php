<div>
    <div>
        <h3>productegories</h3>

        <form  wire:submit.prevent="storeProducts" class="mt-3 form">
            <div class="form-group">
                <label for="title">name Title</label>
                <input type="text" name="name" wire:model='name' id="" class="form-control">
            </div>
            @error('name') <span class="error text-danger">{{ $message }}</span>@enderror
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug"  id="" class="form-control"  wire:model='slug' wire:keyUp='generateSlug'>
            </div>
            @error('slug')<span class="error text-danger">{{ $message }}</span>@enderror
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" wire:model='image' id="" class="form-control">
            </div>
            @error('image')<span class="error text-danger">{{ $message }}</span>@enderror
            <button type="submit" class="btn btn-primary">Save</button>
            <div class="row">
                @if ($image)
                <div class="col-3">
                    <img src="{{ $image->temporaryUrl() }}" width="100%" height="auto">
                </div>

                @endif

            </div>
        </form>



        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h3>All productegories</h3>
                    </div>
                    <div class="col-6 justify-content-end">
                        <a href="#addNewModal" data-bs-toggle="modal" class="btn btn-primary "><i class="fa fa-plus"></i> Add New name</a>
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
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($products as $product )
                        <tr>
        {{--  // name
        // slug
        // short_description
        // description
        // regular_price
        // sell_price
        // buy_price
        // addons
        // SKU
        // quantity
        // featured
        // stock_status
        // image
        // images
        // category_id  --}}
                            <td>{{ $i }}</td>
                            <td><img src="{{ asset('Uploads/'. $product->image) }}" width="80px" height="60px" alt="{{ $product->name }}"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>

                            <td>{{ $product->sell_price }}</td>
                            <td>{{ $product->quantity*$product->sell_price }}</td>
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



