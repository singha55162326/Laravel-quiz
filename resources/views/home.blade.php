@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">ຍິນດີຕ້ອນຮັບສູ່ສອບເສັງປາລະໄນ</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1>
                            ຄຳຖາມ
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1>
                            ລົງທະບຽນຜູ້ໃຊ້
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1>
                            ໄດ້ເສັງຈັກເທື່ອ
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1>
                            ຄະແນນສະເລ່ຍ
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">ເສັງໃຫມ່</a>
        </div>
    </div>
@endsection
