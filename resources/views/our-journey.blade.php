@extends('layouts.master')

@section('title','Our Journey')

@section('content')
  @include('layouts.partials.page-header')
  <section>
  <div class="container">
    <ul class="timeline">
        <!-- Timeline item 1 : 1934 -->
        <li>
          <div class="timeline-badge">1976</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Education</h4> --}}
            </div>
            <div class="timeline-body">
              <p>"{{__('RANPARIA BROTHERS begins its journey as an agricultural diesel engine fuel pipes manufacturer within a 200 sq. feet workshop.')}}</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 2 : 1944 -->
        <li class="timeline-inverted">
          <div class="timeline-badge">1977</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">World War II</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Received the first ever project of manufacturing 10 nos. of diesel engine fuel pipes and other parts.')}}</p>
            </div>
          </div>
        </li>

        <li>
          <div class="timeline-badge">1980</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Eckert–Mauchly Computer Corporation</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Started manufacturing end fitings of pipes from mild steel and brass material and became the first ever inhouse manufacturer of pipe assemblies by installing necessary machinery and started supplying to local oem based company.')}}</p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge">1988</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Remington Rand</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Relocated the business in new building with a floor area space around 3600 sq. feet and also expanded our in-house facilities by installing new machineries.')}}</p>
            </div>
          </div>
        </li>

        <li>
          <div class="timeline-badge">1995</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">CODASYL</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Installed cold forging line with well equipped machinery.')}}</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 7 : 1983 -->
        <li class="timeline-inverted">
          <div class="timeline-badge">2000</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Naval honors</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Incorporated “rajesh brass parts industries” to a newly developed premises with floor space area of around 15000 sq. feet and installed various machineries like trobe, threading, mechanical press, tube draw bench machine etc.')}}</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 8 : 1992 -->
        <li>
          <div class="timeline-badge">2002</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Death</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Installed induction based and upset based hot forging line with necessary machinery. and also installed SPMs (Special Purpose Machine)')}}</p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge">2004</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Death</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Incorporated “ranparia engineering pvt. ltd.” and started supplying auto components to the auto sector, and got certified by ISO 9001:2000 tuv sud, eventually became tier 1 and tier 2 supplier.')}}</p>
            </div>
          </div>
        </li>

        <li>
          <div class="timeline-badge">2008</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Death</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Started cast iron unit in joint venture for manufacturing graded casting products and installed numerous cnc machines and spm drills.')}}</p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge">2018</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              {{-- <h4 class="timeline-title">Death</h4> --}}
            </div>
            <div class="timeline-body">
              <p>{{__('Incorporated “RANPARIA ENGINEERING CO.” and merged with “RAJESH BRASS PARTS” and “RANPARIA ENGINEERING PVT LTD”.')}}</p>
            </div>
          </div>
        </li>
    </ul>
</div>
</section>
@endsection
