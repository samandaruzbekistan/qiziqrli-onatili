@extends('admin.header_footer')


@section('section')
    <main class="content teachers">
        <div class="container-fluid p-0">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">{{ $section_id }} - qism mavzulari</h5>
                        <button class="btn btn-primary add"><i class="align-middle" data-feather="user-plus"></i>
                            Qo'shish
                        </button>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomi</th>
                            <th>Maruza</th>
                            <th>Audio</th>
                            <th>Testlar</th>
                            <th>Rebus</th>
                            <th>Lug'at</th>
                            <th>O'chirish</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($themes as $id => $item)
                            <tr>
                                <td>{{ $id+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('theme.topic.view', ['theme_id' => $item->id]) }}"
                                       class="btn btn-primary ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-align-left align-middle ">
                                            <line x1="17" y1="10" x2="3" y2="10"></line>
                                            <line x1="21" y1="6" x2="3" y2="6"></line>
                                            <line x1="21" y1="14" x2="3" y2="14"></line>
                                            <line x1="17" y1="18" x2="3" y2="18"></line>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('theme.audio.view', ['theme_id' => $item->id]) }}"
                                       class="btn btn-success ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-music align-middle">
                                            <path d="M9 18V5l12-2v13"></path>
                                            <circle cx="6" cy="18" r="3"></circle>
                                            <circle cx="18" cy="16" r="3"></circle>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.theme.quizzes', ['theme_id' => $item->id]) }}"
                                       class="btn btn-warning text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-layers align-middle">
                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                            <polyline points="2 17 12 22 22 17"></polyline>
                                            <polyline points="2 12 12 17 22 12"></polyline>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('theme.question.view', ['id' => $item->id]) }}"
                                       class="btn btn-info text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-check-circle align-middle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.theme.dicts', ['theme_id' => $item->id]) }}"
                                       class="btn btn-secondary text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-share-2 align-middle">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('theme.question.view', ['id' => $item->id]) }}"
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
                            <form action="{{ route('admin.add.section') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nomi <span class="text-danger">*</span></label>
                                    <input name="name" required type="text" class="form-control" placeholder="">
                                </div>
                                <input type="hidden" name="section_id" value="{{ $section_id }}">
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
            message: 'Mavzu qo\'shildi',
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
            message: 'Kitob o\'chirildi!',
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

