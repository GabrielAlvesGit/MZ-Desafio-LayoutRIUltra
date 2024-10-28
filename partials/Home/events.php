<!-- Eventos Stockinfo e Calendário -->
<section class="pageHome__events">
  <div class="container flex">
    <div class="pageHome__events__event">
      <article class="pageHome__events__event__stockinfo">
        <?php if(have_rows('stockinfo_group')): while (have_rows('stockinfo_group')) : the_row(); ?>
        <h1><?php the_sub_field('title'); ?></h1>
        <div class="pageHome__events__event__stockinfo__boxs">
          <div class="pageHome__events__event__stockinfo__boxs__box__left">
            <div class="pageHome__events__event__stockinfo__boxs__box__left__ticker"><?php the_sub_field('ticker'); ?>
            </div>
            <div class="pageHome__events__event__stockinfo__boxs__box__left__variation">
              <?php the_sub_field('variation'); ?></div>
          </div>

          <div class="pageHome__events__event__stockinfo__boxs__box__right">
            <div class="pageHome__events__event__stockinfo__boxs__box__left__price"><?php the_sub_field('price'); ?>
            </div>
          </div>
        </div>

        <svg version="1.1" class="highcharts-root" style="font-family: Helvetica, Arial, sans-serif; font-size: 1rem;"
          xmlns="http://www.w3.org/2000/svg" width="560" height="250" viewBox="0 0 560 250" role="img"
          aria-label="icone interativo 874">
          <desc>Created with Highcharts 11.0.0</desc>
          <defs>
            <filter id="drop-shadow">
              <feDropShadow dx="1" dy="1" flood-color="#000000" flood-opacity="0.75" stdDeviation="2.5"></feDropShadow>
            </filter>
            <clipPath id="highcharts-r052hhy-1-">
              <rect x="0" y="0" width="540" height="196" fill="none"></rect>
            </clipPath>
            <clipPath id="highcharts-r052hhy-24-">
              <rect x="0" y="0" width="540" height="196" fill="none"></rect>
            </clipPath>
          </defs>
          <rect fill="#ffffff" class="highcharts-background" filter="none" x="0" y="0" width="560" height="250" rx="0"
            ry="0"></rect>
          <rect fill="none" class="highcharts-plot-background" x="10" y="10" width="540" height="196" filter="none">
          </rect>
          <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
            <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 9.5 10 L 9.5 206" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 112.5 10 L 112.5 206" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 215.5 10 L 215.5 206" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 318.5 10 L 318.5 206" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 438.5 10 L 438.5 206" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 523.5 10 L 523.5 206" opacity="1"></path>
          </g>
          <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
            <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 10 206.5 L 550 206.5" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 10 157.5 L 550 157.5" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 10 108.5 L 550 108.5" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 10 59.5 L 550 59.5" opacity="1"></path>
            <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1"
              class="highcharts-grid-line" d="M 10 9.5 L 550 9.5" opacity="1"></path>
          </g>
          <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"></g>
          <rect fill="none" class="highcharts-plot-border" data-z-index="1" stroke="#cccccc" stroke-width="0" x="10"
            y="10" width="540" height="196"></rect>
          <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
            <path fill="none" class="highcharts-tick" stroke="#333333" stroke-width="1" d="M 9.5 206 L 9.5 216"
              opacity="1"></path>
            <path fill="none" class="highcharts-tick" stroke="#333333" stroke-width="1" d="M 112.5 206 L 112.5 216"
              opacity="1"></path>
            <path fill="none" class="highcharts-tick" stroke="#333333" stroke-width="1" d="M 215.5 206 L 215.5 216"
              opacity="1"></path>
            <path fill="none" class="highcharts-tick" stroke="#333333" stroke-width="1" d="M 318.5 206 L 318.5 216"
              opacity="1"></path>
            <path fill="none" class="highcharts-tick" stroke="#333333" stroke-width="1" d="M 438.5 206 L 438.5 216"
              opacity="1"></path>
            <path fill="none" class="highcharts-tick" stroke="#333333" stroke-width="1" d="M 523.5 206 L 523.5 216"
              opacity="1"></path>
            <path fill="none" class="highcharts-axis-line" stroke="#333333" stroke-width="1" data-z-index="7"
              d="M 10 206.5 L 550 206.5"></path>
          </g>
          <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
            <path fill="none" class="highcharts-axis-line" stroke="#333333" stroke-width="0" data-z-index="7"
              d="M 550 10 L 550 206"></path>
          </g>
          <g class="highcharts-axis highcharts-yaxis" data-z-index="2">
            <path fill="none" class="highcharts-axis-line" stroke="#333333" stroke-width="0" data-z-index="7"
              d="M 550 10 L 550 402"></path>
          </g>
          <path fill="none" class="highcharts-crosshair highcharts-crosshair-thin" data-z-index="2" stroke="#cccccc"
            stroke-width="1" d="M 498.5 10 L 498.5 206 M 498.5 10 L 498.5 402" style="pointer-events: none;"
            visibility="hidden"></path>
          <g class="highcharts-series-group" data-z-index="3" filter="none">
            <g class="highcharts-series highcharts-series-0 highcharts-line-series" data-z-index="0.1" opacity="1"
              transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-r052hhy-24-)">
              <path fill="none"
                d="M 0 49 L 25.714285714301 37.465160075330004 L 51.428571428549 52.4604519774 L 77.14285714285 30.544256120530008 L 102.85714285715 20.16290018832001 L 128.57142857145 63.995291902069994 L 154.2857142857 55.920903954799996 L 180 72.06967984934 L 205.7142857143 78.99058380414 L 231.42857142855 112.441619585687 L 257.14285714285 87.06497175141 L 282.85714285715 95.13935969868 L 308.57142857145 80.14406779661 L 334.2857142857 118.209039548022 L 360 60.534839924669996 L 385.7142857143 93.98587570621 L 411.42857142855 99.75329566855 L 437.14285714285 90.52542372881 L 462.85714285715 155.120527306968 L 488.57142857145 163.194915254237 L 514.2857142857 142.43220338983 L 540 180.497175141243"
                class="highcharts-graph" data-z-index="1" stroke="#0091ff" stroke-width="1" stroke-linejoin="round"
                stroke-linecap="round" filter="none"></path>
              <path fill="none"
                d="M 0 49 L 25.714285714301 37.465160075330004 L 51.428571428549 52.4604519774 L 77.14285714285 30.544256120530008 L 102.85714285715 20.16290018832001 L 128.57142857145 63.995291902069994 L 154.2857142857 55.920903954799996 L 180 72.06967984934 L 205.7142857143 78.99058380414 L 231.42857142855 112.441619585687 L 257.14285714285 87.06497175141 L 282.85714285715 95.13935969868 L 308.57142857145 80.14406779661 L 334.2857142857 118.209039548022 L 360 60.534839924669996 L 385.7142857143 93.98587570621 L 411.42857142855 99.75329566855 L 437.14285714285 90.52542372881 L 462.85714285715 155.120527306968 L 488.57142857145 163.194915254237 L 514.2857142857 142.43220338983 L 540 180.497175141243"
                data-z-index="2" class="highcharts-tracker-line" stroke-linecap="round" stroke-linejoin="round"
                stroke="rgba(192,192,192,0.0001)" stroke-width="21"></path>
            </g>
            <g class="highcharts-markers highcharts-series-0 highcharts-line-series highcharts-tracker"
              data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)" clip-path="none">
              <path fill="#0091ff" d="M 488 163.194915254237 A 0 0 0 1 1 488 163.194915254237 Z"
                class="highcharts-halo highcharts-color-undefined" data-z-index="-1" fill-opacity="0.25"
                visibility="hidden"></path>
              <path fill="#0091ff" d="M 488 167.194915254237 A 4 4 0 1 1 488.00399999933336 167.19491325423718 Z"
                stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point" visibility="hidden"></path>
            </g>
            <g class="highcharts-series highcharts-series-1 highcharts-line-series highcharts-color-0"
              visibility="hidden" data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)"
              clip-path="url(#highcharts-r052hhy-24-)">
              <path fill="none"
                d="M 0 49 L 25.904761904777 54.15750695436 L 51.809523809501 70.99308322682 L 77.714285714278 58.486128862490006 L 103.61904761906 39.69806781445001 L 129.52380952383 73.64551537478 L 155.42857142856 71.43515525148 L 181.33333333333 67.27231035259999 L 207.23809523811 76.59266220585 L 233.14285714283 105.143147131795 L 259.04761904761 97.941057063379 L 284.95238095239 104.59055710097 L 310.85714285717 85.93143372679 L 336.76190476189 85.23148635441 L 362.66666666667 72.20878129464 L 388.57142857144 89.83640327795 L 414.47619047617 95.25178558003 L 440.38095238094 97.775280054131 L 466.28571428572 105.34576347643 L 492.1904761905 118.571084880836 L 518.09523809522 103.209082023908 L 544 106.414104202692"
                class="highcharts-graph" data-z-index="1" stroke="#2caffe" stroke-width="1" stroke-linejoin="round"
                stroke-linecap="round" filter="none"></path>
              <path fill="none"
                d="M 0 49 L 25.904761904777 54.15750695436 L 51.809523809501 70.99308322682 L 77.714285714278 58.486128862490006 L 103.61904761906 39.69806781445001 L 129.52380952383 73.64551537478 L 155.42857142856 71.43515525148 L 181.33333333333 67.27231035259999 L 207.23809523811 76.59266220585 L 233.14285714283 105.143147131795 L 259.04761904761 97.941057063379 L 284.95238095239 104.59055710097 L 310.85714285717 85.93143372679 L 336.76190476189 85.23148635441 L 362.66666666667 72.20878129464 L 388.57142857144 89.83640327795 L 414.47619047617 95.25178558003 L 440.38095238094 97.775280054131 L 466.28571428572 105.34576347643 L 492.1904761905 118.571084880836 L 518.09523809522 103.209082023908 L 544 106.414104202692"
                visibility="hidden" data-z-index="2" class="highcharts-tracker-line" stroke-linecap="round"
                stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="21"></path>
            </g>
            <g class="highcharts-markers highcharts-series-1 highcharts-line-series highcharts-color-0 highcharts-tracker"
              visibility="hidden" data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)"
              clip-path="none"></g>
          </g>
          <g class="highcharts-exporting-group" data-z-index="3"></g><text x="280" text-anchor="middle"
            class="highcharts-title" data-z-index="4"
            style="color: rgb(51, 51, 51); font-size: 1em; font-weight: bold; fill: rgb(51, 51, 51);"
            y="22"></text><text x="280" text-anchor="middle" class="highcharts-subtitle" data-z-index="4"
            style="color: rgb(102, 102, 102); font-size: 0.8em; fill: rgb(102, 102, 102);" y="24"></text><text x="10"
            text-anchor="start" class="highcharts-caption" data-z-index="4"
            style="color: rgb(102, 102, 102); font-size: 0.8em; fill: rgb(102, 102, 102);" y="247"></text>
          <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="26.99800682067871"
              style="color: rgb(153, 153, 153); cursor: default; font-size: 12px; fill: rgb(153, 153, 153);"
              text-anchor="middle" transform="translate(0,0)" y="233" opacity="1">26/09</text><text x="112.85714285715"
              style="color: rgb(153, 153, 153); cursor: default; font-size: 12px; fill: rgb(153, 153, 153);"
              text-anchor="middle" transform="translate(0,0)" y="233" opacity="1">02/10</text><text x="215.7142857143"
              style="color: rgb(153, 153, 153); cursor: default; font-size: 12px; fill: rgb(153, 153, 153);"
              text-anchor="middle" transform="translate(0,0)" y="233" opacity="1">08/10</text><text x="318.57142857145"
              style="color: rgb(153, 153, 153); cursor: default; font-size: 12px; fill: rgb(153, 153, 153);"
              text-anchor="middle" transform="translate(0,0)" y="233" opacity="1">14/10</text><text x="438.57142857145"
              style="color: rgb(153, 153, 153); cursor: default; font-size: 12px; fill: rgb(153, 153, 153);"
              text-anchor="middle" transform="translate(0,0)" y="233" opacity="1">20/10</text><text x="524.2857142857"
              style="color: rgb(153, 153, 153); cursor: default; font-size: 12px; fill: rgb(153, 153, 153);"
              text-anchor="middle" transform="translate(0,0)" y="233" opacity="1">24/10</text></g>
          <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="550"
              style="color: rgb(187, 187, 187); cursor: default; font-size: 11px; fill: rgb(187, 187, 187);"
              text-anchor="end" transform="translate(0,0)" y="204" opacity="1">-6%</text><text x="550"
              style="color: rgb(187, 187, 187); cursor: default; font-size: 11px; fill: rgb(187, 187, 187);"
              text-anchor="end" transform="translate(0,0)" y="155" opacity="1">-4%</text><text x="550"
              style="color: rgb(187, 187, 187); cursor: default; font-size: 11px; fill: rgb(187, 187, 187);"
              text-anchor="end" transform="translate(0,0)" y="106" opacity="1">-2%</text><text x="550"
              style="color: rgb(187, 187, 187); cursor: default; font-size: 11px; fill: rgb(187, 187, 187);"
              text-anchor="end" transform="translate(0,0)" y="57" opacity="1">0%</text><text x="0"
              style="color: rgb(187, 187, 187); cursor: default; font-size: 11px; fill: rgb(187, 187, 187);"
              text-anchor="end" transform="translate(0,0)" visibility="hidden">+2%</text></g>
          <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"></g>
          <g class="highcharts-label highcharts-tooltip highcharts-color-undefined" data-z-index="8"
            filter="url(#drop-shadow)" style="cursor: default; pointer-events: none;" transform="translate(385,111)"
            opacity="0" visibility="hidden">
            <path fill="#ffffff" class="highcharts-label-box highcharts-tooltip-box"
              d="M 3 0 L 170 0 A 3 3 0 0 1 173 3 L 173 43 A 3 3 0 0 1 170 46 L 120 46 L 114 52 L 108 46 L 3 46 A 3 3 0 0 1 0 43 L 0 3 A 3 3 0 0 1 3 0 Z"
              stroke-width="0" stroke="#0091ff"></path><text x="8" data-z-index="1" y="20"
              style="color: rgb(51, 51, 51); font-size: 0.8em; fill: rgb(51, 51, 51);">
              <tspan class="highcharts-color-undefined">Quarta, 23 Outubro, 2024</tspan>
              <tspan class="highcharts-br" dy="15" x="8">​</tspan>
              <tspan class="highcharts-color-">UGPA3</tspan>: 20,25 (-4,66%)
            </text>
          </g>
        </svg>

        <?php 
            if ( $link = get_sub_field("link") ) {
                $link_url = esc_url($link["url"]);
                $link_title = esc_html($link["title"]);
                $link_target = esc_attr($link["target"] ? $link["target"] : "_self");

                echo <<<END

              <a class="pageHome__events__event__stockinfo__link" href="$link_url" target="$link_target">
                $link_title
              </a>

              END;
              }
            ?>

        <?php endwhile; endif;  ?>
      </article>

      <article class="pageHome__events__event__calendar">
        <?php if(have_rows('calendar_group')): while (have_rows('calendar_group')) : the_row(); ?>
        <h1><?php the_sub_field('title'); ?></h1>

        <?php if(have_rows('date_list')): while (have_rows('date_list')) : the_row(); ?>
        <div class="pageHome__events__event__calendar__date">
          <div class="pageHome__events__event__calendar__date__item">
            <div class="pageHome__events__event__calendar__date__item__day"><?php the_sub_field('day')?></div>
            <div class="pageHome__events__event__calendar__date__item__month"><?php the_sub_field('month')?></div>
          </div>

          <div class="pageHome__events__event__calendar__date__content">
            <div><?php the_sub_field('description')?></div>
          </div>
        </div>
        <?php endwhile; endif;  ?>

        <?php 
            if ( $link = get_sub_field("link") ) {
                $link_url = esc_url($link["url"]);
                $link_title = esc_html($link["title"]);
                $link_target = esc_attr($link["target"] ? $link["target"] : "_self");

                echo <<<END

              <a class="pageHome__events__event__calendar__link" href="$link_url" target="$link_target">
                $link_title
              </a>

              END;
              }
            ?>
        <?php endwhile; endif;  ?>
      </article>
    </div>
  </div>
</section>