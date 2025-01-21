<div class="container pt-5">

    @if (session()->has('message'))
        <div class="text-center alert alert-danger" class="bg-green-100 text-green-700 p-2 rounded ">
            {{ session('message') }}
        </div>
    @endif


    <div class="row">
        <div class="col-auto">
            <button wire:navigate href="/customer/create" class="btn btn-success">Create</button>
        </div>
        <div class="col-auto">
            <input class="form-control" type="text" wire:model.live.debounce.150ms="search" placeholder="Search Customer">
        </div>

    </div>


    <table class="table table-sm table-success table-striped mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>
                    <button wire:navigate href="/customer/{{$customer->id}}" class="btn btn-info">View</button>
                    <button wire:navigate href="/customer/{{$customer->id}}/edit" class="btn btn-secondary">Edit</button>
                    <button wire:click="deleteCustomer({{$customer->id}})" class="btn btn-danger">Delete</button>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$customers->links()}}
</div>
