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
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $totalOrders }}</h3>

                                <p>Total Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('orders') }}" class="small-box-footer">
                                View All <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $completedOrders }}</h3>

                                <p>Completed Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('orders') }}" class="small-box-footer">
                                View All <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $failedOrders }}</h3>

                                <p>Failed Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ route('orders') }}" class="small-box-footer">
                                View All <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ number_format($paidOrders, 2) }}<sup style="font-size: 20px">%</sup></h3>

                                <p>Orders Paid</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('orders') }}" class="small-box-footer">
                                View All <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recent Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
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
                                            @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>
                                                    <b>{{ $order->student->first_name }}
                                                        {{ $order->student->last_name }}</b> <br>
                                                    <small>{{ $order->student->email }}</small> <br>
                                                    <small>{{ $order->student->phone_number }}</small>
                                                </td>
                                                <td>
                                                    <b>{{ @$order->subject->subject_name }}</b> <br>
                                                    <small>{{ @$order->referencingStyle->style }},
                                                        {{ $order->taskType->type_name }}</small> <br>
                                                    <small>{{ $order->studyLevel->label_name }},
                                                        {{ @$order->grade->grade_name }}</small>
                                                </td>
                                                <td>{{ $order->no_of_words }}</td>
                                                <td>{{ $order->price }} {{ strtoupper($order->currency_code) }}
                                                </td>
                                                <td class="text-center">
                                                    @if ($order->payment_status == 'Success')
                                                    <span class="badge bg-success">Success</span>
                                                    @else
                                                    <span class="badge bg-danger">Failed</span>
                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($order->delivery_date)->format('jS F, Y') }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="{{ route('orders') }}" class="btn btn-primary">View All Orders</a>
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
    <!-- /.control-sidebar -->
</div>