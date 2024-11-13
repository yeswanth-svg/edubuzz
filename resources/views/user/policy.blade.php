@extends('layouts.apps')

@section('caurosel')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <section class="page-banner">
        <img src="{{asset('build/img/page2-banner.jpg')}}" class="img-fluid">
    </section>
</div>
<!-- Carousel End -->

@endsection

<style>
     .page-banner {
        height: 300px;
        overflow: hidden;
        margin-bottom: 10px;
    }
    
     @media only screen and (max-width: 979px) {

        .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }

    @media only screen and (max-width: 639px) {
        .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }
</style>
@section('content')

<!-- About Start -->

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-4">Overview</h1>
            <p>This privacy policy describes the information collected by EDUBUZZKIDS (“we,” “us” or “our”) through
                our mobile and web applications and how we use that information.</p>
            <h1 class="mb-4">Information That We Collect</h1>
            <ul>
                <li><strong>Information from Other Services</strong>: We collect data about you from services like
                    Google Analytics, Flurry, Google Play, and others. This information includes:
                    <ul>
                        <li><strong>Device Information</strong>: Device-specific details such as hardware model and
                            operating system version. We do <em>not</em> collect your unique identifier.</li>
                        <li><strong>Unique Application Numbers</strong>: Certain services provide a unique
                            application number, along with information about your installation (e.g., operating
                            system type and application version number).</li>
                        <li><strong>Anonymous Identifiers</strong>: We use anonymous identifiers when you interact
                            with services, including advertising services.</li>
                    </ul>
                </li>
                <li><strong>Compliance with COPPA</strong>:
                    <ul>
                        <li>Our mobile applications adhere to the Children’s Online Privacy Protection Act
                            (“COPPA”).</li>
                        <li>We do not knowingly collect personal information from children under the age of 13.</li>
                        <li>If a user identifies as a child under 13 through a support request, we will not collect,
                            store, or use any personal information and will securely delete any collected data.</li>
                    </ul>
                </li>
            </ul>

            <h1 class="mb-4">How We Use Information That We Collect</h1>
            <ul>
                <li><strong>Application Improvement</strong>: We use the information collected to enhance our
                    applications and improve user experience.</li>
                <li><strong>Data Sharing</strong>: We may share aggregated, non-personally identifiable information
                    with partners, such as publishers and advertisers.</li>
                <li><strong>Policy Changes</strong>:
                    <ul>
                        <li>Our Privacy Policy may change over time.</li>
                        <li>We will not reduce your rights under this Privacy Policy without your explicit consent.
                        </li>
                        <li>Any changes to the Privacy Policy will be posted on this page.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-lg-4 about-img wow fadeInUp" data-wow-delay="0.5s">
            <!-- YouTube Videos Section -->
            <div class="mt-4">
                <h2 class="mb-3 text-center">Watch Our Videos</h2>
                <iframe class="img-fluid w-100 rounded" src="https://www.youtube.com/embed/zkqxpCXcQJI"
                    title="YouTube video player" allowfullscreen style="height: 200px;"></iframe>
                <iframe class="img-fluid w-100 rounded mt-2" src="https://www.youtube.com/embed/udxSNNEEeZw"
                    title="YouTube video player" allowfullscreen style="height: 200px;"></iframe>
                <iframe class="img-fluid w-100 rounded mt-2" src="https://www.youtube.com/embed/1rWAKJCH4ic"
                    title="YouTube video player" allowfullscreen style="height: 200px;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- About End -->

@endsection