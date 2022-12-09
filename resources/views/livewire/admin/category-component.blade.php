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
</div>
