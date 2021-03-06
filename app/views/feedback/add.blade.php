@extends('layouts.master')

@section('title', trans('feedback_add.page_title'))

@section('styles')
        
@stop
      
@section('content')


<!-- 1e1413e10f011dfebcc6b900cffce8e8da2906d0 -->
    <div class="row">
        <div class="col-lg-12">

            <section class="panel panel-default">
            <header class="panel-heading" style="border-radius:0">
              <b>{{ trans('feedback_add.page_title') }}</b>
            </header>
            <div class="panel-body">
                <form id="form-add-feedback" class="form-horizontal" action="{{ URL::to('feedback/save') }}" method="post" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="slc_type">{{ trans('feedback_add.type') }}</label>
                        <div class="fg-line col-sm-10">
                        <select id="slc_type" name="slc_type" class="form-control">
                            @foreach($typeOptions as $key => $value)
                            <option value="{{ $key }}"> {{ $value }} </option>
                            @endforeach;
                        </select>    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="subject">{{ trans('feedback_add.subject') }}</label>
                        <div class="fg-line col-sm-10">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="{{ trans('feedback_add.subject') }}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="contents">{{ trans('feedback_add.content') }}</label>
                        <div class="fg-line col-sm-10">
                        <textarea type="text" id="contents" name="contents" rows="5" class="form-control" placeholder="{{ trans('feedback_add.content') }}"></textarea>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary" style="margin-left:50%">{{ trans('app.btn_send_text') }}</button>
                </form>

                </div>
            </section>  
        </div>          
    </div>


<!-- [SVN] r6072 | trung | 2016-08-12 09:21:28 +0700 (T6, 12 Th08 2016) | -->
@stop

@section('scripts')

    {{ ViewUtil::renderJsLanguage('feedback_add') }}

    <script src="{{ URL::asset('public/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/feedback_add.js') }}"></script>

    @if(Session::has('error_message'))
        <script type="text/javascript">
            Notification.notify('{{ Session::get('error_message') }}', 'dander');
        </script>
    @endif
    
@stop