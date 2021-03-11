<!-- start: Header -->
<div class="header" id="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a href="{{route('show.view')}}"
               title="Bốc xếp hà nội Tiến Thắng" class="logo-header">
                <img src="images/{{@$logo_page->image}}"
                     alt="Bốc xếp hà nội tiến thắng.">
                <span class="text-next-logo">{{@$post->domain_logo ?? "Bốc Xếp 24/24h"}}</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @include('layouts.menu')
                <div class="header-phone">
                    <i class="fas fa-phone-volume" aria-hidden="true"></i>
                    <h3><a title="Có mặt ngay sau 10 phút"
                           href="tel:{{@$user->phone_number}}">{{@''.substr(@$user->phone_number, 0, 3).' '.substr(@$user->phone_number, 3, 3).' '.substr(@$user->phone_number,6)}}
                        </a>
                    </h3>
                </div>
            </div>
        </nav>
    </div>
</div>
<!--end: Header-->
