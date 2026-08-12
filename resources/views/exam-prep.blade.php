<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exam Prep</title>
      @vite(['resources/css/app.css'])
  </head>
  @php
      $subjectIcon = function (string $key) {
          return match ($key) {
              'Mathematics' => '<span style="font-size:13px;font-weight:600;">x&sup2;</span>',
              'Science' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.5 2H9.5V6.2L12.5 12.2C12.9 13 12.3 14 11.4 14H4.6C3.7 14 3.1 13 3.5 12.2L6.5 6.2V2Z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M5.5 2H10.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M4.8 10.5H11.2" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>',
              'English' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 3.5C3 2.8 4.5 2.5 5.5 2.8C6.3 3 7 3.4 8 4.2C9 3.4 9.7 3 10.5 2.8C11.5 2.5 13 2.8 14 3.5V12C13 11.4 11.5 11.1 10.5 11.4C9.7 11.6 9 12 8 12.8C7 12 6.3 11.6 5.5 11.4C4.5 11.1 3 11.4 2 12V3.5Z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M8 4.2V12.8" stroke="currentColor" stroke-width="1.3"/></svg>',
              'Social Science' => '<svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.3"/><path d="M2 8H14M8 2C9.5 3.8 10.3 5.8 10.3 8C10.3 10.2 9.5 12.2 8 14C6.5 12.2 5.7 10.2 5.7 8C5.7 5.8 6.5 3.8 8 2Z" stroke="currentColor" stroke-width="1.1"/></svg>',
              'Hindi' => '<span style="font-size:13px;font-weight:600;">&#2309;</span>',
              default => '',
          };
      };
  @endphp
  <body class="body">
      <!-- This is the side bar section  -->
      @include('partials.sidebar')

      <!-- // this is the right main section of the page -->
      <section class="main__body">

          <!-- // app bar / topbar -->
          <section class="xp-topbar">
              <div class="xp-topbar__brand">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2557_2521)">
<path d="M4.125 19.2501C3.74688 19.2501 3.42322 19.1154 3.15402 18.8461C2.88467 18.5769 2.75 18.2532 2.75 17.8751V4.12508C2.75 3.74696 2.88467 3.42322 3.15402 3.15387C3.42322 2.88468 3.74688 2.75008 4.125 2.75008H8.82292C8.89931 2.21536 9.14375 1.77612 9.55625 1.43237C9.96875 1.08862 10.45 0.916748 11 0.916748C11.55 0.916748 12.0312 1.08862 12.4438 1.43237C12.8562 1.77612 13.1007 2.21536 13.1771 2.75008H17.875C18.2531 2.75008 18.5769 2.88468 18.8462 3.15387C19.1154 3.42322 19.25 3.74696 19.25 4.12508V17.8751C19.25 18.2532 19.1154 18.5769 18.8462 18.8461C18.5769 19.1154 18.2531 19.2501 17.875 19.2501H4.125ZM4.125 17.8751H17.875V4.12508H4.125V17.8751ZM6.41667 15.5834H12.6729V14.2084H6.41667V15.5834ZM6.41667 11.6876H15.5833V10.3126H6.41667V11.6876ZM6.41667 7.79175H15.5833V6.41675H6.41667V7.79175ZM11.5615 3.49487C11.7219 3.33446 11.8021 3.1473 11.8021 2.93341C11.8021 2.71953 11.7219 2.53237 11.5615 2.37196C11.401 2.21154 11.2139 2.13133 11 2.13133C10.7861 2.13133 10.599 2.21154 10.4385 2.37196C10.2781 2.53237 10.1979 2.71953 10.1979 2.93341C10.1979 3.1473 10.2781 3.33446 10.4385 3.49487C10.599 3.65529 10.7861 3.7355 11 3.7355C11.2139 3.7355 11.401 3.65529 11.5615 3.49487Z" fill="#6D28D9"/>
</g>
<defs>
<clipPath id="clip0_2557_2521">
<rect width="22" height="22" fill="white"/>
</clipPath>
</defs>
</svg>

                  <h2 class="xp-topbar__title">Exam Prep</h2>
              </div>

              <div class="xp-topbar__actions">
                  <button class="xp-icon-btn" aria-label="Search">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15.5 15.5L11 11M12.5 7.25C12.5 10.1495 10.1495 12.5 7.25 12.5C4.35051 12.5 2 10.1495 2 7.25C2 4.35051 4.35051 2 7.25 2C10.1495 2 12.5 4.35051 12.5 7.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </button>

                  <button class="xp-icon-btn" aria-label="Notifications">
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 1.5C5.79 1.5 4 3.29 4 5.5V8.5L2.5 11H13.5L12 8.5V5.5C12 3.29 10.21 1.5 8 1.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                          <path d="M6.5 13.5C6.79 14.2 7.35 14.5 8 14.5C8.65 14.5 9.21 14.2 9.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <span class="xp-icon-btn__badge">3</span>
                  </button>

                  <div class="xp-profile">
                      <div class="xp-profile__avatar">A1</div>
                      <div>
                          <p class="xp-profile__name">A1 Australia</p>
                          <p class="xp-profile__meta">Class 10 &bull; CBSE</p>
                      </div>
                      <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4 6L8 10L12 6" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </div>
              </div>
          </section>

          <!-- // page content -->
          <section class="xp-content">

              <!-- // left / main column -->
              <div class="xp-main">

                  <!-- Board Examination readiness card -->
                  <div class="xp-card xp-readiness">
                      <div class="xp-readiness__left">
                          <div class="xp-readiness__ring" data-percent="72">
                              <svg viewBox="0 0 120 120">
                                  <circle cx="60" cy="60" r="52" fill="none" stroke="#EDEBFB" stroke-width="11"/>
                                  <circle class="xp-readiness__ring-progress" cx="60" cy="60" r="52" fill="none" stroke="#6D28D9" stroke-width="11"
                                          stroke-linecap="round" stroke-dasharray="326.73" stroke-dashoffset="326.73"/>
                              </svg>
                              <div class="xp-readiness__ring-center">
                                  <span class="xp-readiness__value"><span id="xpReadinessCount">0</span><span class="xp-readiness__percent">%</span></span>
                                  <span class="xp-readiness__label">Overall Readiness</span>
                              </div>
                          </div>

                          <div class="xp-readiness__info">
                              <div>
                                  <h1 class="xp-readiness__heading">Board Examination 2027</h1>
                                  <p class="xp-readiness__meta">Class 10 &bull; CBSE Board</p>
                              </div>
                              <p class="xp-readiness__desc">
                                  You're 72% ready for your board exams. Keep going! Focus on weak areas to improve your score.
                              </p>
                              <button class="xp-btn">
                                  View Readiness
                                  <svg width="13" height="13" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M3.5 8H12.5M12.5 8L8.5 4M12.5 8L8.5 12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </button>
                          </div>
                      </div>

                      <!-- decorative illustration -->
                      <div class="xp-readiness__illustration">
                          <svg width="150" height="120" viewBox="0 0 150 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="18" y="82" width="90" height="16" rx="3" fill="#8B5CF6"/>
                              <rect x="24" y="66" width="78" height="16" rx="3" fill="#A78BFA"/>
                              <rect x="30" y="50" width="66" height="16" rx="3" fill="#C4B5FD"/>
                              <rect x="30" y="20" width="34" height="30" rx="3" fill="#FFFFFF" stroke="#8B5CF6" stroke-width="2"/>
                              <path d="M35 27H59M35 33H59M35 39H52" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round"/>
                              <path d="M40 20L40 12" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round"/>
                              <path d="M54 20L54 12" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round"/>
                              <circle cx="105" cy="34" r="26" fill="#FFFFFF" stroke="#7C3AED" stroke-width="4"/>
                              <circle cx="105" cy="34" r="2.5" fill="#7C3AED"/>
                              <path d="M105 34L105 20" stroke="#7C3AED" stroke-width="3" stroke-linecap="round"/>
                              <path d="M105 34L114 38" stroke="#7C3AED" stroke-width="3" stroke-linecap="round"/>
                              <path d="M88 12L94 18M122 12L116 18" stroke="#7C3AED" stroke-width="4" stroke-linecap="round"/>
                          </svg>
                      </div>
                  </div>

                  <!-- Subject Readiness -->
                  <div class="xp-card">
                      <div class="xp-card__head">
                          <h3 class="xp-card__title">Subject Readiness</h3>
                          <a href="#" class="xp-card__link">
                              View All Subjects
                              <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M3.5 8H12.5M12.5 8L8.5 4M12.5 8L8.5 12" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </a>
                      </div>

                      <div class="xp-subjects-grid">
                          @foreach ([
                              ['name' => 'Mathematics', 'color' => '#6D28D9', 'bg' => '#EDE9FE', 'pct' => 78, 'status' => 'Good', 'tone' => 'green', 'note' => 'Keep practicing!'],
                              ['name' => 'Science', 'color' => '#16A34A', 'bg' => '#DCFCE7', 'pct' => 64, 'status' => 'Needs Improvement', 'tone' => 'amber', 'note' => 'Focus more on weak topics'],
                              ['name' => 'English', 'color' => '#2563EB', 'bg' => '#DBEAFE', 'pct' => 86, 'status' => 'Excellent', 'tone' => 'green', 'note' => 'Excellent performance!'],
                              ['name' => 'Social Science', 'color' => '#EA580C', 'bg' => '#FFEDD5', 'pct' => 70, 'status' => 'Average', 'tone' => 'amber', 'note' => 'Can do better!'],
                              ['name' => 'Hindi', 'color' => '#DB2777', 'bg' => '#FCE7F3', 'pct' => 81, 'status' => 'Good', 'tone' => 'green', 'note' => 'Keep it up!'],
                          ] as $subject)
                              <div class="xp-subject" data-percent="{{ $subject['pct'] }}">
                                  <div class="xp-subject__head">
                                      <div class="xp-subject__icon" style="background-color: {{ $subject['bg'] }}; color: {{ $subject['color'] }};">
                                          {!! $subjectIcon($subject['name']) !!}
                                      </div>
                                      <p class="xp-subject__name">{{ $subject['name'] }}</p>
                                  </div>

                                  <p class="xp-subject__pct"><span class="xp-subject__pct-count">0</span>%</p>

                                  <div class="xp-subject__track">
                                      <div class="xp-subject__bar" style="width: 0%; background-color: {{ $subject['color'] }};"></div>
                                  </div>

                                  <span class="xp-pill xp-pill--{{ $subject['tone'] }}">{{ $subject['status'] }}</span>

                                  <p class="xp-subject__note">{{ $subject['note'] }}</p>
                              </div>
                          @endforeach
                      </div>
                  </div>

                  <!-- Recommended for you + Revision plan -->
                  <div class="xp-two-col">

                      <!-- Recommended for You -->
                      <div class="xp-card">
                          <div class="xp-card__head">
                              <div>
                                  <h3 class="xp-card__title">Recommended for You</h3>
                                  <p class="xp-card__subtitle">Based on your performance</p>
                              </div>
                              <a href="#" class="xp-card__link">
                                  View All
                                  <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M3.5 8H12.5M12.5 8L8.5 4M12.5 8L8.5 12" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </a>
                          </div>

                          <div class="xp-reco-list">
                              @foreach ([
                                  ['title' => 'Quadratic Equations', 'subtitle' => 'Accuracy: 61% &bull; Needs Improvement', 'icon' => 'x²', 'color' => '#6D28D9', 'bg' => '#EDE9FE', 'action' => 'Practice Now', 'style' => 'solid'],
                                  ['title' => 'Electricity', 'subtitle' => "You haven't practiced recently", 'icon' => '<svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 1.5L3.5 9.5H7.5L6.5 14.5L12.5 6H8.5L9 1.5Z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/></svg>', 'color' => '#16A34A', 'bg' => '#DCFCE7', 'action' => 'Revise Now', 'style' => 'outline'],
                                  ['title' => 'Trigonometry', 'subtitle' => 'Scoring good! Keep it up', 'icon' => 'π', 'color' => '#EA580C', 'bg' => '#FFEDD5', 'action' => 'Practice More', 'style' => 'outline-orange'],
                              ] as $item)
                                  <div class="xp-reco-item">
                                      <div class="xp-reco-item__left">
                                          <div class="xp-reco-item__icon" style="background-color: {{ $item['bg'] }}; color: {{ $item['color'] }};">
                                              {!! $item['icon'] !!}
                                          </div>
                                          <div>
                                              <p class="xp-reco-item__title">{{ $item['title'] }}</p>
                                              <p class="xp-reco-item__subtitle">{!! $item['subtitle'] !!}</p>
                                          </div>
                                      </div>

                                      @if ($item['style'] === 'solid')
                                          <button class="xp-btn" style="padding: 6px 14px;">{{ $item['action'] }}</button>
                                      @elseif ($item['style'] === 'outline-orange')
                                          <button class="xp-btn-outline xp-btn-outline--orange">{{ $item['action'] }}</button>
                                      @else
                                          <button class="xp-btn-outline">{{ $item['action'] }}</button>
                                      @endif
                                  </div>
                              @endforeach
                          </div>

                          <a href="#" class="xp-more-link">More Recommendations &rarr;</a>
                      </div>

                      <!-- Revision Plan -->
                      <div class="xp-card">
                          <div class="xp-card__head">
                              <div>
                                  <h3 class="xp-card__title">Revision Plan</h3>
                                  <p class="xp-card__subtitle">This Week</p>
                              </div>
                              <a href="#" class="xp-card__link">
                                  View Plan
                                  <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M3.5 8H12.5M12.5 8L8.5 4M12.5 8L8.5 12" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </a>
                          </div>

                          <div class="xp-revision-list">
                              @foreach ([
                                  ['title' => 'Real Numbers', 'status' => 'Completed', 'state' => 'done'],
                                  ['title' => 'Polynomials', 'status' => 'Completed', 'state' => 'done'],
                                  ['title' => 'Quadratic Equations', 'status' => 'In Progress', 'state' => 'active'],
                                  ['title' => 'Trigonometry', 'status' => 'Upcoming', 'state' => 'upcoming', 'day' => 'Thu'],
                                  ['title' => 'Statistics', 'status' => 'Upcoming', 'state' => 'upcoming', 'day' => 'Fri'],
                              ] as $item)
                                  <div class="xp-revision-item {{ $item['state'] === 'active' ? 'xp-revision-item--active' : '' }}">
                                      <div class="xp-revision-item__left">
                                          @if ($item['state'] === 'done')
                                              <span class="xp-revision-status xp-revision-status--done">
                                                  <svg width="10" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M3.5 8L6.5 11L12.5 4.5" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>
                                              </span>
                                          @elseif ($item['state'] === 'active')
                                              <span class="xp-revision-status xp-revision-status--active"></span>
                                          @else
                                              <span class="xp-revision-status xp-revision-status--upcoming"></span>
                                          @endif

                                          <div>
                                              <p class="xp-revision-title {{ $item['state'] === 'active' ? 'xp-revision-title--active' : '' }}">{{ $item['title'] }}</p>
                                              <p class="xp-revision-subtitle">{{ $item['status'] }}</p>
                                          </div>
                                      </div>

                                      @if ($item['state'] === 'done')
                                          <span class="xp-revision-done">
                                              <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M3.5 8L6.5 11L12.5 4.5" stroke="#16A34A" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                              Done
                                          </span>
                                      @elseif ($item['state'] === 'active')
                                          <button class="xp-revision-start">Start</button>
                                      @else
                                          <span class="xp-revision-day">{{ $item['day'] }}</span>
                                      @endif
                                  </div>
                              @endforeach
                          </div>

                          <a href="#" class="xp-more-link">View Full Plan &rarr;</a>
                      </div>
                  </div>

                  <!-- Bottom banner -->
                  <div class="xp-banner">
                      <div class="xp-banner__left">
                          <div class="xp-banner__icon">
                              <svg width="22" height="22" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <circle cx="8" cy="8" r="6.5" stroke="white" stroke-width="1.4"/>
                                  <circle cx="8" cy="8" r="3.8" stroke="white" stroke-width="1.4"/>
                                  <circle cx="8" cy="8" r="1.1" fill="white"/>
                              </svg>
                          </div>
                          <div>
                              <p class="xp-banner__title">Stay Consistent, Stay Ahead!</p>
                              <p class="xp-banner__desc">Daily practice of 30 minutes can improve your score significantly.</p>
                          </div>
                      </div>
                      <button class="xp-btn" style="flex-shrink: 0;">
                          Start Practicing Now
                          <svg width="13" height="13" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.5 8H12.5M12.5 8L8.5 4M12.5 8L8.5 12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                      </button>
                  </div>
              </div>

              <!-- // right column -->
              <div class="xp-aside">

                  <!-- Board Exam countdown -->
                  <div class="xp-card xp-card--sm">
                      <h3 class="xp-card__title xp-card__title--sm" style="margin-bottom: 16px;">Board Exam in</h3>

                      <div class="xp-countdown-grid" id="xpCountdown" data-exam-date="2027-03-15T00:00:00">
                          @foreach ([['days', 'Days'], ['hours', 'Hours'], ['mins', 'Mins'], ['secs', 'Secs']] as [$unit, $label])
                              <div>
                                  <p class="xp-countdown-value" data-unit="{{ $unit }}">--</p>
                                  <p class="xp-countdown-label">{{ $label }}</p>
                              </div>
                          @endforeach
                      </div>

                      <div class="xp-countdown-date">
                          <div class="xp-countdown-date__icon">
                              <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="2" y="3" width="12" height="11" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                                  <path d="M2 6.5H14" stroke="currentColor" stroke-width="1.3"/>
                                  <path d="M5.5 1.5V4M10.5 1.5V4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                              </svg>
                          </div>
                          <div>
                              <p class="xp-countdown-date__title">15 March 2027</p>
                              <p class="xp-countdown-date__subtitle">Class 10 Board Examination</p>
                          </div>
                      </div>
                  </div>

                  <!-- Quick Actions -->
                  <div class="xp-card xp-card--sm">
                      <h3 class="xp-card__title xp-card__title--sm" style="margin-bottom: 12px;">Quick Actions</h3>

                      <div class="xp-actions-list">
                          @foreach ([
                              ['title' => 'Start Mock Test', 'subtitle' => 'Simulate actual exam', 'color' => '#6D28D9', 'bg' => '#EDE9FE'],
                              ['title' => 'View Revision Plan', 'subtitle' => 'Your personalized plan', 'color' => '#16A34A', 'bg' => '#DCFCE7'],
                              ['title' => 'Practice Questions', 'subtitle' => 'Practice by topics', 'color' => '#EA580C', 'bg' => '#FFEDD5'],
                              ['title' => 'Previous Results', 'subtitle' => 'View past performance', 'color' => '#2563EB', 'bg' => '#DBEAFE'],
                          ] as $action)
                              <a href="#" class="xp-action">
                                  <div class="xp-action__left">
                                      <div class="xp-action__icon" style="background-color: {{ $action['bg'] }};">
                                          <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M4 2H10L13 5V14H4V2Z" stroke="{{ $action['color'] }}" stroke-width="1.3" stroke-linejoin="round"/>
                                              <path d="M6 8H11M6 10.5H11" stroke="{{ $action['color'] }}" stroke-width="1.3" stroke-linecap="round"/>
                                          </svg>
                                      </div>
                                      <div>
                                          <p class="xp-action__title">{{ $action['title'] }}</p>
                                          <p class="xp-action__subtitle">{{ $action['subtitle'] }}</p>
                                      </div>
                                  </div>
                                  <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6 3.5L10.5 8L6 12.5" stroke="#94A3B8" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </a>
                          @endforeach
                      </div>
                  </div>

                  <!-- Upcoming Tests -->
                  <div class="xp-card xp-card--sm">
                      <div class="xp-card__head" style="margin-bottom: 12px;">
                          <h3 class="xp-card__title xp-card__title--sm">Upcoming Tests</h3>
                          <a href="#" class="xp-card__link">
                              View All
                              <svg width="10" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M3.5 8H12.5M12.5 8L8.5 4M12.5 8L8.5 12" stroke="#4F46E5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </a>
                      </div>

                      <div class="xp-tests-list">
                          @foreach ([
                              ['title' => 'Mathematics Mock Test', 'subject' => 'Mathematics', 'date' => '20 Dec 2026', 'time' => '3:00 PM', 'color' => '#6D28D9', 'bg' => '#EDE9FE'],
                              ['title' => 'Science Mock Test', 'subject' => 'Science', 'date' => '22 Dec 2026', 'time' => '3:00 PM', 'color' => '#16A34A', 'bg' => '#DCFCE7'],
                              ['title' => 'English Mock Test', 'subject' => 'English', 'date' => '24 Dec 2026', 'time' => '3:00 PM', 'color' => '#EA580C', 'bg' => '#FFEDD5'],
                          ] as $test)
                              <div class="xp-test">
                                  <div class="xp-test__icon" style="background-color: {{ $test['bg'] }}; color: {{ $test['color'] }};">
                                      {!! $subjectIcon($test['subject']) !!}
                                  </div>
                                  <div>
                                      <p class="xp-test__title">{{ $test['title'] }}</p>
                                      <p class="xp-test__subtitle">Full Syllabus</p>
                                      <p class="xp-test__meta">
                                          <span class="xp-test__meta-item">
                                              <svg width="10" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="2" y="3" width="12" height="11" rx="1.5" stroke="currentColor" stroke-width="1.3"/>
                                                  <path d="M2 6.5H14" stroke="currentColor" stroke-width="1.3"/>
                                              </svg>
                                              {{ $test['date'] }}
                                          </span>
                                          <span class="xp-test__meta-item">
                                              <svg width="10" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.3"/>
                                                  <path d="M8 4.5V8L10.5 9.5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>
                                              </svg>
                                              {{ $test['time'] }}
                                          </span>
                                      </p>
                                  </div>
                              </div>
                          @endforeach
                      </div>

                      <a href="#" class="xp-more-link">All Mock Tests &rarr;</a>
                  </div>
              </div>
          </section>
      </section>

      <script>
          document.addEventListener('DOMContentLoaded', function () {
              var ring = document.querySelector('.xp-readiness__ring');
              var circle = ring.querySelector('.xp-readiness__ring-progress');
              var countEl = document.getElementById('xpReadinessCount');
              var percent = parseFloat(ring.dataset.percent || '0');
              var radius = circle.r.baseVal.value;
              var circumference = 2 * Math.PI * radius;
              var targetOffset = circumference * (1 - percent / 100);
              var duration = 1400;

              function easeOutCubic(t) {
                  return 1 - Math.pow(1 - t, 3);
              }

              // Double rAF so the browser paints the starting state before
              // the transition to the target offset kicks in.
              requestAnimationFrame(function () {
                  requestAnimationFrame(function () {
                      circle.style.strokeDashoffset = targetOffset;
                  });
              });

              var start = null;
              function tick(timestamp) {
                  if (!start) start = timestamp;
                  var progress = Math.min((timestamp - start) / duration, 1);
                  countEl.textContent = Math.round(easeOutCubic(progress) * percent);
                  if (progress < 1) requestAnimationFrame(tick);
              }
              requestAnimationFrame(tick);

              // Subject readiness cards: bar fill + counting number, staggered
              document.querySelectorAll('.xp-subject').forEach(function (card, index) {
                  var subjectPercent = parseFloat(card.dataset.percent || '0');
                  var bar = card.querySelector('.xp-subject__bar');
                  var subjectCountEl = card.querySelector('.xp-subject__pct-count');
                  var subjectDelay = index * 90;

                  setTimeout(function () {
                      requestAnimationFrame(function () {
                          requestAnimationFrame(function () {
                              bar.style.width = subjectPercent + '%';
                          });
                      });

                      var subjectStart = null;
                      function subjectTick(timestamp) {
                          if (!subjectStart) subjectStart = timestamp;
                          var progress = Math.min((timestamp - subjectStart) / duration, 1);
                          subjectCountEl.textContent = Math.round(easeOutCubic(progress) * subjectPercent);
                          if (progress < 1) requestAnimationFrame(subjectTick);
                      }
                      requestAnimationFrame(subjectTick);
                  }, subjectDelay);
              });

              // Live "Board Exam in" countdown
              var countdown = document.getElementById('xpCountdown');
              if (countdown) {
                  var examDate = new Date(countdown.dataset.examDate).getTime();
                  var daysEl = countdown.querySelector('[data-unit="days"]');
                  var hoursEl = countdown.querySelector('[data-unit="hours"]');
                  var minsEl = countdown.querySelector('[data-unit="mins"]');
                  var secsEl = countdown.querySelector('[data-unit="secs"]');

                  function updateCountdown() {
                      var remaining = Math.max(0, examDate - Date.now());

                      var days = Math.floor(remaining / 86400000);
                      var hours = Math.floor((remaining % 86400000) / 3600000);
                      var mins = Math.floor((remaining % 3600000) / 60000);
                      var secs = Math.floor((remaining % 60000) / 1000);

                      daysEl.textContent = days;
                      hoursEl.textContent = String(hours).padStart(2, '0');
                      minsEl.textContent = String(mins).padStart(2, '0');
                      secsEl.textContent = String(secs).padStart(2, '0');
                  }

                  updateCountdown();
                  setInterval(updateCountdown, 1000);
              }
          });
      </script>
  </body>
</html>
