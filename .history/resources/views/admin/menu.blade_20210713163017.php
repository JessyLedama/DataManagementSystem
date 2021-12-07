
<aside class="card pull-left">
    <ul>
        <li>
            <a href="{{ route('settings') }}">
                Settings
            </a>
        </li> 

        

        <!-- My Account -->
        <li>
            <a href="{{ route('profile') }}">
                My Account
            </a>
        </li> 
        
        <!-- Car Insurance Requests -->
        <li>
            <div data-toggle="categories-sub-menu" class="toggle-sub-menu clearfix">
                <span class="pull-left">
                    Car Insurance Requests
                </span>

                <span class="pull-right toggle-icon">
                    <i class="lni-chevron-down"></i>
                </span>
            </div>

            <ul id="categories-sub-menu" class="sub-menu">
                <li>
                    <a href="{{ route('insurance-requests-list') }}">
                        All Car Insurance Requests
                    </a>
                </li>
            </ul>
        </li>

        <!-- Vehicle Transfer -->
        <li>
            <a href="{{ route('vehicle-transfer-create') }}">
                Vehicle Transfer
            </a>
        </li>
        
        <!-- Logbook Car Search -->
        <li>
            <a href="{{ route('vehicle-transfer-create') }}">
                Logbook Car Search
            </a>
        </li>
        
        <li id="dashboard-sign-out">
            <a onclick="document.getElementById('customer-logout-form').submit()">
                Sign out
            </a>
        </li>
    </ul>

    <!-- logout form -->
    <form id="customer-logout-form" action="{{ route('logout') }}" method="POST">

        @csrf

    </form>
</aside>

<script>
    jQuery(document).ready(function ($) {

        // Toggle drop down sub-menu
        $('.toggle-sub-menu').click(function () {

            $(`*[data-toggle="${$(this).attr('data-toggle')}"] .toggle-icon`).toggleClass('drop');

            $('#' + $(this).attr('data-toggle')).fadeToggle();
        });

        // Show dropdown with current page link
        switch ('{{ url()->current() }}') {

            case "{{ route('all-users') }}":
            case "{{ route('create-user') }}":

                $('#categories-sub-menu').css('display', 'block');
                $('*[data-toggle="categories-sub-menu"], #categories-sub-menu').addClass('link-active');
                break;

            case "{{ route('profile') }}":

                $('#subcategories-sub-menu').css('display', 'block');
                $('*[data-toggle="subcategories-sub-menu"], #subcategories-sub-menu').addClass('link-active');
                break;

            
        }

        // Highlight cuurent page link
        $(`a[href="{{ url()->current() }}"]`).addClass('link-active');

        // Invert drop-down icon for active link
        $('.toggle-sub-menu.link-active .toggle-icon').toggleClass('drop')
    });
</script>