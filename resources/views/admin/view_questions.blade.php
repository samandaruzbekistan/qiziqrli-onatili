@extends('admin.header_footer')


@section('section')
    <main class="content teachers">
        <div class="container-fluid p-0">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">{{ $theme->name }} savollari</h5>
                        <button class="btn btn-primary add"><i class="align-middle" data-feather="user-plus"></i>
                            Qo'shish
                        </button>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Savol</th>
                            <th>Rasmi</th>
                            <th>Javobi</th>
                            <th>O'chirish</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($questions as $id => $item)
                            <tr>
                                <td>{{ $id+1 }}</td>
                                <td>{{ $item->question }}</td>
                                <td class="w-25">
                                    <img src="{{ asset('img/question') }}/{{ $item->photo }}" alt="chchc" class="w-50">
                                </td>
                                <td>
                                    {{ $item->answer }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.question.delete', ['id' => $item->id]) }}"
                                       class="btn btn-danger text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-trash-2 align-middle">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <main class="content forma" style="padding-bottom: 0; display: none">
        <div class="container-fluid p-0">
            <div class="col-md-8 col-xl-9">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Yangi mavzu qo'shish</h5>
                        </div>
                        <div class="card-body h-100">
                            <form action="{{ route('admin.question.add') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Savol <span class="text-danger">*</span></label>
                                    <input name="question" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Javob <span class="text-danger">*</span></label>
                                    <input name="answer" required type="text" class="form-control" placeholder="">
                                </div>
                                <label class="form-label">Rasmi <span class="text-danger">*</span></label>
                                <input name="photo" required accept="image/*" type="file" class="form-control mb-3" placeholder="">
                                <input type="hidden" name="theme_id" value="{{ $theme->id }}">
                                <div class=" text-end">
                                    <button type="button" class="btn btn-danger cancel">Bekor qilish</button>
                                    <button type="submit" class="btn btn-success">Qo'shish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script>
        $(".add").on("click", function () {
            $('.forma').show();
            $('.teachers').hide();
        });

        $(".cancel").on("click", function () {
            event.stopPropagation();
            $('.forma').hide();
            $('.teachers').show();
        });

        @if($errors->any())
            const notyf = new Notyf();

            @foreach ($errors->all() as $error)
                notyf.error({
                    message: '{{ $error }}',
                    duration: 5000,
                    dismissible: true,
                    position: {
                        x: 'center',
                        y: 'top'
                    },
                });
            @endforeach

        @endif

        @if(session('success') == 1)
        const notyf = new Notyf();

        notyf.success({
            message: 'Savol qo\'shildi',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('delete') == 1)
        const notyf = new Notyf();

        notyf.warning({
            message: 'Savol o\'chirildi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif
    </script>
@endsection

