@extends('layouts.app')

@section('template_title')
  {!! trans('usersmanagement.showing-user', ['name' => $horoscopes->name]) !!}
@endsection


<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

@section('content')
  <div class="container mt-5 ">
    <div class="row">
      @include('layouts.sidenav')
      <div class="col-sm-10">

        <div class="card">
`
          <div class="card-header text-white">
            <div style="display: flex; justify-content: space-between; align-items: center;">
              {!! trans('usersmanagement.showing-user-title', ['name' => $horoscopes->name]) !!}
              <div class="float-right">
                <a href="/horoscopes" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="{{ trans('usersmanagement.tooltips.back-users') }}">
                  <i class="fa fa-fw fa-mail-reply" aria-hidden="true"></i>
                  {!! trans('usersmanagement.buttons.back-to-users') !!}
                </a>
              </div>
            </div>
          </div>

          <div class="card-body">

            <div class="row">
              <div class="col-sm-4 col-md-6 mx-auto">
                <h4 class="text-muted margin-top-sm-1 text-center text-left-tablet">
                  {{ $horoscopes->name }}
                </h4>
                <p class="text-center text-left-tablet">
                  <strong>
                    {{ $horoscopes->reptype }}
                  </strong>
                  @if($horoscopes->email)
                    <br />
                    <span class="text-center" data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email]) }}">
                      {{ Html::mailto($horoscopes->email, $horoscopes->email) }}
                    </span>
                  @endif
                </p>
                  <div class="text-center text-left-tablet mb-4">
                    <a href="/horoscope/{{$horoscopes->id}}/edit" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.editUser') }}">
                      <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md"> {{ trans('usersmanagement.editUser') }} </span>
                    </a>
                    {!! Form::open(array('url' => 'horoscope/' . $horoscopes->id, 'class' => 'form-inline', 'data-toggle' => 'tooltip', 'data-placement' => 'right', 'title' => trans('usersmanagement.deletereport'))) !!}
                      {!! Form::hidden('_method', 'DELETE') !!}
                      {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="hidden-xs hidden-sm hidden-md">' . trans('usersmanagement.deleteUser') . '</span>' , array('class' => 'btn btn-danger btn-sm','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')) !!}
                    {!! Form::close() !!}
                  </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @if ($horoscopes->name)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.id') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->orderID }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->name)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.fname') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->name }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->email)

            <div class="col-sm-5 col-6 text-larger">
              <strong>
                {{ trans('horoscopes.users-table.email') }}
              </strong>
            </div>

            <div class="col-sm-7">
              <span data-toggle="tooltip" data-placement="top" title="{{ trans('usersmanagement.tooltips.email-user', ['user' => $horoscopes->email]) }}">
                {{ HTML::mailto($horoscopes->email, $horoscopes->email) }}
              </span>
            </div>

            <div class="clearfix"></div>
            <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->phone)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.phone') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->phone }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->gender)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.gender') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->gender }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->dob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.dob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->dob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->tob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.tob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->tob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->pob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.pob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->pob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->cob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.cob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->cob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif


            @if ($horoscopes->tob)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.tob') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->tob }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->reftype )

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.reftype') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->reftype }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($horoscopes->refdetails))


                @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.refdetails') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->refdetails }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif


            @if (empty($horoscopes->horoscope))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.horoscope') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->horoscope }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($horoscopes->productamount))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.productamount') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->productamount }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if (empty($horoscopes->status))
            @else
              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('horoscopes.users-table.status') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->status }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->created_at)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelCreatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->created_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

            @if ($horoscopes->updated_at)

              <div class="col-sm-5 col-6 text-larger">
                <strong>
                  {{ trans('usersmanagement.labelUpdatedAt') }}
                </strong>
              </div>

              <div class="col-sm-7">
                {{ $horoscopes->updated_at }}
              </div>

              <div class="clearfix"></div>
              <div class="border-bottom"></div>

            @endif

          </div>

        </div>
      </div>
    </div>
  </div>

  @include('modals.modal-delete')

@endsection

@section('footer_scripts')
  @include('scripts.delete-modal-script')
  @if(config('usersmanagement.tooltipsEnabled'))
    @include('scripts.tooltips')
  @endif
@endsection
