
<aside class="card pull-left">
    <ul>
        <li>
            <a href="{{ route('profile') }}">
                My Account
            </a>
        </li> 

        <li>
            <div data-toggle="categories-sub-menu" class="toggle-sub-menu clearfix">
                <span class="pull-left">
                    Users
                </span>

                <span class="pull-right toggle-icon">
                    <i class="lni-chevron-down"></i>
                </span>
            </div>

            <ul id="categories-sub-menu" class="sub-menu">
                <li>
                    <a href="{{ route('all-users') }}">
                        All users
                    </a>
                </li>
                <li>
                    <a href="{{ route('create-user') }}">
                        Add user
                    </a>
                </li>
            </ul>
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

            case "{{ route('subcategory.index') }}":
            case "{{ route('subcategory.create') }}":

                $('#subcategories-sub-menu').css('display', 'block');
                $('*[data-toggle="subcategories-sub-menu"], #subcategories-sub-menu').addClass('link-active');
                break;

            case "{{ route('safari.index') }}":
            case "{{ route('safari.create') }}":

                $('#safaris-sub-menu').css('display', 'block');
                $('*[data-toggle="safaris-sub-menu"], #safaris-sub-menu').addClass('link-active');
                break;
        }

        // Highlight cuurent page link
        $(`a[href="{{ url()->current() }}"]`).addClass('link-active');

        // Invert drop-down icon for active link
        $('.toggle-sub-menu.link-active .toggle-icon').toggleClass('drop')
    });
</script>