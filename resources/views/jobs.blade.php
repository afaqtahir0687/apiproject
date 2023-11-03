<style>
    .head {
        background: khaki;
    }

    .table {
        background: aliceblue;
        width: 50%;
        /* border-collapse: collapse; */
    }

    .table th,
    .table td {
        padding: 0.50rem;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }
</style>

<div class="container-fluid pt-4 px-4 mt-5">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-info rounded h-100 p-4">
                <h2 class="mb-4">Jobs Detail</h2>
                <table class="table table-striped border-primary">
                    <thead style="text-align:center;">
                        <tr class="head">
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Post Id</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                        @foreach($jobs as $data)
                        <tr>
                            <td>{{ $data->id ?? '' }}</td>
                            <td>{{ $data->name ?? '' }}</td>
                            <td>{{ $data->description ?? '' }}</td>
                            <td>{{ $data->status ?? '' }}</td>
                            <td>{{ $data->post->count() ?? 0 }}</td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
