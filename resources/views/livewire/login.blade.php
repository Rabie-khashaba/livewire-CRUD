<div class="container pt-5">


    <div class="offset-3 col-6">
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="card offset-3 col-6 mt-2" >

        <div class="card-header">
            Login User
        </div>
        <div class="card-body">
            <form wire:submit.prevent="login">
                @csrf
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

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>
</div>
