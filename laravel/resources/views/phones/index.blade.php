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
        @foreach($phones as $phone)
            <tr>
                <th scope="row">{{ $phone->id }}</th>
                <td>{{ $phone->brand }}</td>
                <td>{{ $phone->price }} €</td>
                <td>

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

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
