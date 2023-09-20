@extends('admin.layout.layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Category Name</th>
                <th>Parent Category Name</th>
                <th>Create Date</th>
                <th style="text-align:center;"> Action </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($categories as $key => $categorie)
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $categorie->name }}</td>
                    <td>
                        @if ($categorie->category_id)
                            {{ $categorie->parent }}
                        @else
                            No Parent Category
                        @endif
                    </td>
                    <td>{{ $categorie->created_at }}</td>
                    <td>
                        <a href="{{ url('/categories/edit', $categorie->id) }} " style="font-size: 17px;padding;"><i
                                class="fa fa-edit"> Edit</i>
                        </a>
                    </td>
                    <td>
                        <a href="javaseript::void(0)" style="font-size: 17px;padding;" data-id="{{ $categorie->id }}"
                            class="category_delete">
                            <i class="fa fa-trash"> Delete</i>
                        </a>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('footer-script')
    <script>
        $('.category_delete').on('click', function() {
            if (confirm('Are you delete thic category.')) {
                var id = $(this).data('id');
                $.ajax({
                    url:'{{url("categories/delete")}}',
                    method:'post',
                    data:{
                        _token: "{{ csrf_token() }}",
                        'id':id
                    },
                    success:function(data){
                    locatiom.reload();
                    }
                });

            }
        });
    </script>
@endpush
