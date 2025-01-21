<div class="container pt-5">


    <div class="card offset-3 col-6 mt-2" >
        <div class="card-header">
            Register User
        </div>
        <div class="card-body">
            <form wire:submit.prevent="storeUser">
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
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input wire:model="password" type="text" class="form-control" id="exampleInputPassword1">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror

                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>

            <div class="mb-3">
                Already have an account? <button wire:navigate href="/login" class="btn btn-success"> Login </button>
            </div>
        </div>
    </div>
</div>
