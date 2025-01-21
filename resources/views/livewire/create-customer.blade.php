<div class="container pt-5">

    @if (session()->has('add'))
        <div class="offset-3 col-6 alert alert-success" class="bg-green-100 text-green-700 p-2 rounded">
            {{ session('add') }}
        </div>
    @endif

        <button wire:navigate href="/customers" class="btn btn-success">Customers</button>

        <div class="card offset-3 col-6 mt-2" >
        <div class="card-header">
            Create Customer
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <input wire:model="phone" type="text" class="form-control" id="exampleInputPassword1">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
