<table class="table thead-light">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($phone as $phone)
            <tr>
                <th scope="row">{{ $phone->id }}</th>
                <td>{{ $phone->brand }}</td>
                <td>{{ $phone->price }} €</td>
                <td>

                    @if(Auth::check())
                        <a href="">
                            <i class="far fa-eye"></i>
                        </a>

                        <a href="">
                            <i class="far fa-edit"></i>
                        </a>

                        <form action="{{ route('phones.destroy', compact('phone')) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-meteor"></i>
                            </button>
                        </form>
                    @endif

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
