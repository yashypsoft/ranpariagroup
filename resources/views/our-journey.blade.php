@extends('layouts.master')

@section('title','Our Journey')

@section('content')
  @include('layouts.partials.page-header')
  <style>
    .page-header, .page-footer {
    text-align: center;
}

blockquote {
    background: #eee;
    border-left: 5px solid #ddd;
}

.timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            background: white;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

            .timeline > li > .timeline-panel:before {
                position: absolute;
                top: 26px;
                right: -15px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-left: 15px solid #ccc;
                border-right: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
            }

            .timeline > li > .timeline-panel:after {
                position: absolute;
                top: 27px;
                right: -14px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-left: 14px solid #fff;
                border-right: 0 solid #fff;
                border-bottom: 14px solid transparent;
                content: " ";
            }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 60px;
            height: 60px;
            line-height: 59px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -32px;
            background-color: #ffd100;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

.timeline-title {
    margin-top: 0;
    color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}

    .timeline-body > p + p {
        margin-top: 5px;
    }

@media (max-width: 767px) {
    ul.timeline:before {
        left: 40px;
    }

    ul.timeline > li > .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
    }

    ul.timeline > li > .timeline-badge {
        left: 8px;
        margin-left: 0;
        top: 10px;
    }

    ul.timeline > li > .timeline-panel {
        float: right;
    }

        ul.timeline > li > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        ul.timeline > li > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }
}
  </style>
  <div class="container">
    <ul class="timeline">
        <!-- Timeline item 1 : 1934 -->
        <li>
          <div class="timeline-badge">1934</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Education</h4>
            </div>
            <div class="timeline-body">
              <p>In 1934, Grace was awarded a PhD in mathematics from Yale University, following her Master's from Yale and Bachelor's from Vassar. She then returned to Vassar to teach mathematics.</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 2 : 1944 -->
        <li class="timeline-inverted">
          <div class="timeline-badge">1944</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">World War II</h4>
            </div>
            <div class="timeline-body">
              <p>After enlisting in the Navy Reserve and completing her training at Smith College, Grace served as one of three principal programmers of the Mark I computer at Harvard.</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 3 : 1949 -->
        <li>
          <div class="timeline-badge">1949</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Eckert–Mauchly Computer Corporation</h4>
            </div>
            <div class="timeline-body">
              <p>Grace was hired as a senior mathemtician on the team devloping UNIVAC, the first commercial computer produced in the United States.</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 4 : 1952 -->
        <li class="timeline-inverted">
          <div class="timeline-badge">1952</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Remington Rand</h4>
            </div>
            <div class="timeline-body">
              <p>Grace developed the A-0 system, an arithmetic language and what is regarded to be the first compiler. This paved the way for new high-level language development.</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 5 : 1959 -->
        <li>
          <div class="timeline-badge">1959</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">CODASYL</h4>
            </div>
            <div class="timeline-body">
              <p>As a technical consultant to the Conference on Data Systems Languages, Grace was instrumental in defining the pivotal COBOL business language.</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 7 : 1983 -->
        <li class="timeline-inverted">
          <div class="timeline-badge">1983</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Naval honors</h4>
            </div>
            <div class="timeline-body">
              <p>Continuing her Navy career, Grace served as Director of the Navy Programming Languages Group. After a joint resolution in the House of Representatives, she was promoted to the rank of Commodore by President Ronald Reagan (the designation later became Rear Admiral).</p>
            </div>
          </div>
        </li>

        <!-- Timeline item 8 : 1992 -->
        <li>
          <div class="timeline-badge">1992</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Death</h4>
            </div>
            <div class="timeline-body">
              <p>Grace passed away at the age of 85, and was buried at Arlington National Cemetery with full military honors.</p>
            </div>
          </div>
        </li>
    </ul>
</div>
@endsection
