<div class="container pt-5">
    {{-- Do your work, then step back. --}}

    <div class="card offset-3 col-6">
        <div class="card-header">
           View Customer
        </div>
        <div class="card-body">
            <h5 class="card-title">Name : {{$customer->name}}</h5>
            <p class="card-text">Email : {{$customer->email}}</p>
            <p class="card-text">Phone : {{$customer->phone}}</p>
            <a href="/customers" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
