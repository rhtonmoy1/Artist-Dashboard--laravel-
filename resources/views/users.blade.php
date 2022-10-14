<x-master>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Account Details</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">


                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl #</th>
                                            <th>Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mr X</td>
                                            <td>
                                            <a href="{{ route('users.show', ['id'=>1]) }}">Show</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Mr y</td>
                                            <td>
                                                <a href="{{ route('users.show', ['id'=>2]) }}">Show</a>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
