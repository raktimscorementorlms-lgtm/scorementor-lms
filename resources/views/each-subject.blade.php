<?php

$lessons = require_once base_path('data/lessons.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
         @vite(['resources/css/app.css'])
  </head>
  <body class="body">
      <!-- This is the side bar section  -->
        @include('partials.sidebar')
        
      <!-- // this is the right main section of the page -->
      <section class="main__body">
          <!-- // this is the app bar section -->
          <section style="height: 83px; border-bottom: 1px solid black;"></section>

            <!-- // main section -->
          <section class="main__container">
              <!-- this is the left section -->
              <div class="main__container__left">

                  <!-- this is the top container which consists of quadratic video  -->
                  <div class="quadratic__container">
                      <div class="quadratic__container__top">
                          <img src="Quadratic equations video.png" alt="quadratic video" />
                          <div class="quadratic__container__top__text">
                              <div class="top__text__pill">
                                  <p>chapter 4</p>
                              </div>
                              <h1>Quadratic Equations</h1>
                              <div class="top__text__description">
                                  <p>Learn all the concepts of quadratic equations</p>
                                  <p>through short and easy to understand videos</p>
                              </div>
                          </div>
                      </div>

                      <div class="quadratic__container__bottom">
                          <div class="quadratic__container__bottom__description">
                              <p>Your progress</p>
                              <p>3 out of 4 completed</p>
                          </div>

                          <div class="qudratic__container__bottom__progress">
                              <div class="qudratic__container__bottom__progress__bar" />
                          </div>
                      </div>
                  </div>

              </div>
              <!-- this section consists of the videos section  -->
              <div class="mt-5 w-full gap-4 p-5 rounded-[14px] border border-gray-200 flex flex-col bg-white  mb-2.5">
                  <!-- video container header  -->
                  <div class="video__container__header">
                      <div>
                          <h4>Video Lessons</h4>
                          <p class="text-muted">4 lessons</p>
                      </div>

                      <button class="btn btn-success flex-row gap-10">
                          <img src="tick.svg" alt="success" />
                          <p class="mark__success__text">Mark as completed</p>
                      </button>
                  </div>

                  <!-- now all the courses section  -->
              <div class="space-y-6">

    <?php foreach ($lessons as $index => $lesson): ?>

        <?php
            $isCompleted = $lesson['status'] === 'completed';
            $isInProgress = $lesson['status'] === 'in_progress';
            $isLocked = $lesson['status'] === 'locked';
        ?>

        <div
            class="
                relative
                grid
                grid-cols-[80px_1fr_230px_180px]
                items-center
                gap-6
                min-h-47.5
                overflow-hidden
                rounded-2xl
                border
                border-slate-200
                bg-white
                px-8
                py-6
            "
        >

            <!-- Number -->
            <div class="flex justify-center">
                <div
                    class="
                        flex
                        items-center
                        justify-center
                        rounded-2xl
                        text-2xl
                        font-medium
                        <?php if ($isCompleted): ?>
                            bg-green-50 text-green-700

                        <?php elseif ($isInProgress): ?>
                            bg-indigo-50 text-indigo-600

                        <?php else: ?>
                            bg-slate-50 text-slate-400
                        <?php endif; ?>
                    "
                >
                    <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>

                </div>
            </div>

            <!-- Lesson details -->
            <div class="flex-1">
                <h3 class="mb-2 text-xl font-medium text-slate-900">
                    <?= htmlspecialchars($lesson['title']) ?>
                </h3>

                <p class="max-w-xl text-base leading-7 text-slate-500">
                    <?= htmlspecialchars($lesson['content']) ?>
                </p>

                <div class="mt-4 flex items-center gap-2 text-slate-400">

                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <circle cx="12" cy="12" r="9"></circle>

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 7v5l3 2"
                        ></path>
                    </svg>

                    <span>
                        <?= htmlspecialchars($lesson['duration']) ?> min
                    </span>
                </div>
            </div>


            <!-- Image -->
            <div class="flex justify-center">

                <img
                    src="<?= htmlspecialchars($lesson['image']) ?>"
                    alt="<?= htmlspecialchars($lesson['title']) ?>"
                    class="
                        h-32.5
                        w-57.5
                        rounded-xl
                        object-cover
                    "
                >

            </div>


            <!-- Status -->
            <div class="flex flex-col items-center text-center">

                <?php if ($isCompleted): ?>

                    <div
                        class="
                            flex
                            h-9
                            w-9
                            items-center
                            justify-center
                            rounded-full
                            border-2
                            border-green-500
                            text-green-500
                        "
                    >

                        <svg
                            class="h-5 w-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7"
                            />
                        </svg>

                    </div>

                    <p class="mt-4 text-lg text-slate-700">
                        Completed
                    </p>


                <?php elseif ($isInProgress): ?>

                    <div
                        class="
                            flex
                            h-9
                            w-9
                            items-center
                            justify-center
                            rounded-full
                            border-2
                            border-indigo-500
                            text-indigo-500
                        "
                    >

                        <svg
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path d="M8 5v14l11-7z"/>
                        </svg>

                    </div>

                    <p class="mt-4 text-lg text-indigo-500">
                        In Progress
                    </p>

                    <span class="mt-1 text-slate-400">
                        <?= (int) $lesson['percentage'] ?>% Completed
                    </span>


                <?php else: ?>

                    <svg
                        class="h-8 w-8 text-slate-700"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="
                                M17 8h-1V6
                                a4 4 0 00-8 0v2H7
                                a2 2 0 00-2 2v9
                                a2 2 0 002 2h10
                                a2 2 0 002-2v-9
                                a2 2 0 00-2-2z

                                M10 6
                                a2 2 0 114 0v2h-4V6z
                            "
                        />
                    </svg>

                    <p class="mt-4 text-lg text-slate-700">
                        Locked
                    </p>

                    <span class="mt-1 max-w-42.5 leading-6 text-slate-400">
                        Complete previous lesson to unlock
                    </span>

                <?php endif; ?>

            </div>


            <!-- Progress bar background -->
            <?php if (!$isLocked): ?>

                <div
                    class="
                        absolute
                        bottom-0
                        left-0
                        h-1.5
                        w-full
                        bg-slate-100
                    "
                >

                    <div
                        class="
                            h-full

                            <?= $isCompleted
                                ? 'bg-green-500'
                                : 'bg-indigo-500'
                            ?>
                        "
                        style="width: <?= (int) $lesson['percentage'] ?>%"
                    ></div>

                </div>

            <?php endif; ?>

        </div>

    <?php endforeach; ?>

</div>
              </div>
          </div>

          <!-- this is the right section -->
          <div class="main__container__right"></div>

          </section>

      </section>
  </body>
</html>

