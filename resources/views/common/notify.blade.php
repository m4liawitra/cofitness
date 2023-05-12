<script>
    'use strict';

    var BootstrapNotifySetup = function () {
        var notifySetup = function () {
            var content = {};
            var type = '';

            content.title = '';
            content.message = '';

            @if (session('notify_title'))
                content.title = '{{ session('notify_title') }}';
            @endif

            @if (session('notify_icon'))
                content.icon = '{{ session('notify_icon') }}';
            @endif

            @if (session('notify_message_error'))
                type = 'danger';
                content.message = '{{ session('notify_message_error') }}';
                content.icon = content.icon ? content.icon : 'fa fa-exclamation';
            @endif

            @if (session('notify_message_success'))
                type = 'success';
                content.message = '{{ session('notify_message_success') }}';
                content.icon = content.icon ? content.icon : 'ki ki-check';
            @endif

            @if (session('notify_message_info'))
                type = 'info';
                content.message = '{{ session('notify_message_info') }}';
                content.icon = content.icon ? content.icon : 'fa fa-exclamation';
            @endif

            @if ($errors->any())
                type = 'danger';
                @foreach ($errors->all() as $error)
                    content.message += '{{ $error }}<br>';
                @endforeach
                content.icon = content.icon ? content.icon : 'fa fa-exclamation';
            @endif

            content.icon += ' text-' + type;

            if (type.length > 0) {
                $.notify(content, {
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: 'top',
                        align: 'center'
                    },
                    offset: {
                        x: 0,
                        y: 90
                    },
                    delay: 5000,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    },
                    template: '\
                        <div data-notify="container" class="alert alert-{0} fade show d-flex w-50 mb-5" role="alert">\
                            <div data-notify="icon" class="alert-icon mt-1 mr-3"></div>\
                            <div class="alert-text mr-auto">\
                                <span class="text-{0} font-weight-bolder">{1}</span>\
                                <span data-notify="message" class="text-dark">{2}</span>\
                            </div>\
                            <div class="alert-close">\
                                <a href="#" class="text-primary" data-dismiss="alert" aria-label="{{ __('labels.common.button.close') }}">{{ __('labels.common.button.dismiss') }}</a>\
                            </div>\
                        </div>\
                    ',
                });
            }
        }
        
        return {
            init: function() {
                notifySetup();
            }
        };
    }();

    jQuery(document).ready(function() {
        BootstrapNotifySetup.init();
    });
</script>