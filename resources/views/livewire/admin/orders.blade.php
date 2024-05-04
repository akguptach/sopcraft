<div class="wrapper">

    <!-- Preloader -->
    @livewire('admin.layout.loader')

    <!-- Navbar -->
    @livewire('admin.layout.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @livewire('admin.layout.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Orders</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-3">
                                <div class="table-responsive w-100">
                                    <table class="table table-striped table-bordered w-100" id="orderTable">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Student</th>
                                                <th>Item</th>
                                                <th>Word Count</th>
                                                <th>Price</th>
                                                <th style="width: 150px">Payment Status</th>
                                                <th>Delivery</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- Append Order List Here --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @livewire('admin.layout.footer')

    @push('scripts')
        <script type="text/javascript">
            $(function() {
                var table = $('#orderTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('sop-order-data') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'student_data',
                            name: 'student_data'
                        },
                        {
                            data: 'item_data',
                            name: 'item_data'
                        },
                        {
                            data: 'word_count',
                            name: 'word_count'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: 'payment_status',
                            name: 'payment_status'
                        },
                        {
                            data: 'delivery_date',
                            name: 'delivery_date'
                        },
                    ]
                });
            });
        </script>
    @endpush
    <!-- /.control-sidebar -->
</div>
