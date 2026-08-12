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
        <!-- TOP APP BAR -->
        <header class="h-[72px] w-full border-b border-slate-200 bg-white px-[28px]">
            <div class="flex h-full items-center justify-between">

                <!-- ========================= -->
                <!-- LEFT: Breadcrumb          -->
                <!-- ========================= -->
                <nav class="flex items-center gap-[12px]">

                    <!-- Back Arrow -->
                    <button type="button" class="flex h-5 w-5 items-center justify-center text-slate-500">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 10.5L5.25 7L8.75 3.5" stroke="#64748B" stroke-width="1.2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- Class 10-A -->
                    <a href="#" class="text-[12px] font-normal leading-[18px] text-slate-500">
                        Class 10-A
                    </a>

                    <!-- Separator -->
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 3L7.5 6L4.5 9" stroke="#CBD5E1" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <!-- Mathematics -->
                    <a href="#" class="text-[12px] font-normal leading-[18px] text-slate-500">
                        Mathematics
                    </a>

                    <!-- Separator -->
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 3L7.5 6L4.5 9" stroke="#CBD5E1" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <!-- Quadratic Equations -->
                    <a href="#" class="text-[12px] font-normal leading-[18px] text-slate-500">
                        Quadratic Equations
                    </a>

                    <!-- Separator -->
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 3L7.5 6L4.5 9" stroke="#CBD5E1" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                    <!-- Current Page -->
                    <span class="text-[12px] font-medium leading-[18px] text-slate-800">
                        Video Lessons
                    </span>

                </nav>


                <!-- ========================= -->
                <!-- RIGHT: User Controls      -->
                <!-- ========================= -->
                <div class="flex items-center">

                    <!-- Search -->
                    <button type="button"
                        class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-slate-50">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7.2" cy="7.2" r="4.2" stroke="#475569" stroke-width="1.2" />
                            <path d="M10.4 10.4L13 13" stroke="#475569" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                    </button>


                    <!-- Notification -->
                    <div class="relative ml-[12px]">

                        <button type="button"
                            class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-slate-50">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 14C8.73638 14 9.33333 13.403 9.33333 12.6667H6.66667C6.66667 13.403 7.26362 14 8 14Z"
                                    fill="#475569" />

                                <path
                                    d="M12 10.6667H4C4.736 9.86 5.333 8.92667 5.333 7.33333V6.66667C5.333 5.19391 6.52724 4 8 4C9.47276 4 10.667 5.19391 10.667 6.66667V7.33333C10.667 8.92667 11.264 9.86 12 10.6667Z"
                                    stroke="#475569" stroke-width="1.1" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Notification Badge -->
                        <div
                            class="absolute -right-[2px] -top-[4px] flex h-[14px] min-w-[14px] items-center justify-center rounded-full bg-red-500 px-[3px]">
                            <span class="text-[8px] font-semibold leading-none text-white">
                                3
                            </span>
                        </div>

                    </div>


                    <!-- Avatar -->
                    <div
                        class="ml-[12px] flex h-[34px] w-[34px] shrink-0 items-center justify-center rounded-full bg-slate-900">
                        <span class="text-[11px] font-medium text-white">
                            A1
                        </span>
                    </div>


                    <!-- School / User Information -->
                    <div class="ml-[12px] flex min-w-[76px] flex-col justify-center">

                        <p class="whitespace-nowrap text-[11px] font-medium leading-[15px] text-slate-800">
                            A1 Australia
                        </p>

                        <p class="mt-[1px] text-[9px] font-normal leading-[12px] text-slate-400">
                            Student
                        </p>
                    </div>


                    <!-- Dropdown -->
                    <button type="button" class="ml-[10px] flex h-5 w-5 items-center justify-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 4.5L6 7.5L9 4.5" stroke="#64748B" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>

                </div>

            </div>
        </header>

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
                min-h-47.5
                overflow-hidden
                rounded-2xl
                border
                border-slate-200
                bg-white
                px-8
                py-6
                flex
                items-center
                gap-4
            ">

                        <!-- Number -->
                        <div
                            class="
                    flex
                    items-center
                    justify-center
                    rounded-2xl
                    text-2xl
                    font-medium
                    h-16
                    w-16
                    shrink-0
                    flex-1
                    <?php if ($isCompleted): ?>
                        bg-green-50 text-green-700

                    <?php elseif ($isInProgress): ?>
                        bg-indigo-50 text-indigo-600

                    <?php else: ?>
                        bg-slate-50 text-slate-400
                    <?php endif; ?>
                ">
                            <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>

                        </div>

                        <!-- Lesson details -->
                        <div class="flex-5">
                            <h3 class="mb-2 text-xl font-medium text-slate-900">
                                <?= htmlspecialchars($lesson['title']) ?>
                            </h3>

                            <span class="max-w-xl text-sm leading-7 text-slate-500">
                                <?= htmlspecialchars($lesson['content']) ?>
                            </span>

                            <div class="mt-4 flex items-center gap-2 text-slate-400">

                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9"></circle>

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"></path>
                                </svg>

                                <span>
                                    <?= htmlspecialchars($lesson['duration']) ?> min
                                </span>
                            </div>
                        </div>


                        <!-- Image -->
                        <div class="flex justify-center shrink-0 flex-2">

                            <img src="<?= htmlspecialchars($lesson['image']) ?>"
                                alt="<?= htmlspecialchars($lesson['title']) ?>"
                                class="
                        h-32.5
                        w-57.5
                        rounded-xl
                        object-contain
                    ">

                        </div>


                        <!-- Status -->
                        <div class="flex flex-col items-center text-center shrink-0 flex-1">

                            <?php if ($isCompleted): ?>

                            <div class="flex flex-col justify-center items-center">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.0868 15.8604L16.867 9.08017L15.7649 8.00204L10.0868 13.6802L7.21178 10.8052L6.13366 11.8833L10.0868 15.8604ZM11.5003 21.0833C10.1906 21.0833 8.95276 20.8317 7.78678 20.3286C6.62081 19.8255 5.60258 19.1387 4.7321 18.2682C3.86161 17.3977 3.1748 16.3795 2.67168 15.2135C2.16855 14.0475 1.91699 12.8097 1.91699 11.5C1.91699 10.1743 2.16855 8.92843 2.67168 7.76246C3.1748 6.59649 3.86161 5.58225 4.7321 4.71975C5.60258 3.85725 6.62081 3.17444 7.78678 2.67131C8.95276 2.16819 10.1906 1.91663 11.5003 1.91663C12.826 1.91663 14.0719 2.16819 15.2378 2.67131C16.4038 3.17444 17.418 3.85725 18.2805 4.71975C19.143 5.58225 19.8258 6.59649 20.329 7.76246C20.8321 8.92843 21.0837 10.1743 21.0837 11.5C21.0837 12.8097 20.8321 14.0475 20.329 15.2135C19.8258 16.3795 19.143 17.3977 18.2805 18.2682C17.418 19.1387 16.4038 19.8255 15.2378 20.3286C14.0719 20.8317 12.826 21.0833 11.5003 21.0833ZM11.5003 19.6458C13.7684 19.6458 15.693 18.8512 17.2743 17.2619C18.8555 15.6727 19.6462 13.752 19.6462 11.5C19.6462 9.2319 18.8555 7.30725 17.2743 5.726C15.693 4.14475 13.7684 3.35413 11.5003 3.35413C9.24824 3.35413 7.32758 4.14475 5.73835 5.726C4.14911 7.30725 3.35449 9.2319 3.35449 11.5C3.35449 13.752 4.14911 15.6727 5.73835 17.2619C7.32758 18.8512 9.24824 19.6458 11.5003 19.6458Z"
                                        fill="#16A34A" />
                                </svg>
                                <p class="mt-4 text-lg text-slate-700">
                                    Completed
                                </p>
                            </div>

                            <?php elseif ($isInProgress): ?>
                            <div class="flex flex-col justify-center items-center w-s">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2556_1188)">
                                        <path
                                            d="M9.17637 15.5729L15.5732 11.5L9.17637 7.42704V15.5729ZM11.5003 21.0833C10.1906 21.0833 8.95276 20.8317 7.78678 20.3286C6.62081 19.8255 5.60258 19.1387 4.7321 18.2682C3.86161 17.3977 3.1748 16.3795 2.67168 15.2135C2.16855 14.0475 1.91699 12.8097 1.91699 11.5C1.91699 10.1743 2.16855 8.92843 2.67168 7.76246C3.1748 6.59649 3.86161 5.58225 4.7321 4.71975C5.60258 3.85725 6.62081 3.17444 7.78678 2.67131C8.95276 2.16819 10.1906 1.91663 11.5003 1.91663C12.826 1.91663 14.0719 2.16819 15.2378 2.67131C16.4038 3.17444 17.418 3.85725 18.2805 4.71975C19.143 5.58225 19.8258 6.59649 20.329 7.76246C20.8321 8.92843 21.0837 10.1743 21.0837 11.5C21.0837 12.8097 20.8321 14.0475 20.329 15.2135C19.8258 16.3795 19.143 17.3977 18.2805 18.2682C17.418 19.1387 16.4038 19.8255 15.2378 20.3286C14.0719 20.8317 12.826 21.0833 11.5003 21.0833ZM11.5003 19.6458C13.7684 19.6458 15.693 18.8512 17.2743 17.2619C18.8555 15.6727 19.6462 13.752 19.6462 11.5C19.6462 9.2319 18.8555 7.30725 17.2743 5.726C15.693 4.14475 13.7684 3.35413 11.5003 3.35413C9.24824 3.35413 7.32758 4.14475 5.73835 5.726C4.14911 7.30725 3.35449 9.2319 3.35449 11.5C3.35449 13.752 4.14911 15.6727 5.73835 17.2619C7.32758 18.8512 9.24824 19.6458 11.5003 19.6458Z"
                                            fill="#4F46E5" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2556_1188">
                                            <rect width="23" height="23" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="mt-4 text-lg text-indigo-700">
                                    In Progress
                                </p>
                            </div>

                            <span class="mt-1 text-xs text-slate-400">
                                <?= (int) $lesson['percentage'] ?>% Completed
                            </span>


                            <?php else: ?>

                            <svg class="h-8 w-8 text-slate-700" fill="currentColor" viewBox="0 0 24 24">
                                <path d="
                                M17 8h-1V6
                                a4 4 0 00-8 0v2H7
                                a2 2 0 00-2 2v9
                                a2 2 0 002 2h10
                                a2 2 0 002-2v-9
                                a2 2 0 00-2-2z
                                M10 6
                                a2 2 0 114 0v2h-4V6z
                            " />
                            </svg>

                            <p class="mt-4 text-lg text-slate-700">
                                Locked
                            </p>

                            <span class="mt-1 max-w-42.5 leading-6 text-xs text-slate-400">
                                Complete previous lesson to unlock
                            </span>

                            <?php endif; ?>

                        </div>

                    </div>

                    <?php endforeach; ?>

                    <div class="flex items-start gap-5 rounded-2xl border border-indigo-100 bg-indigo-50 px-8 py-6">
                        <!-- Icon -->
                        <div class="mt-1 shrink-0 text-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                                <path
                                    d="M8.5 14.5A7 7 0 1 1 15.5 14.5C14.6 15.2 14 16.2 14 17H10C10 16.2 9.4 15.2 8.5 14.5Z">
                                </path>
                            </svg>
                        </div>

                        <!-- Text -->
                        <div>
                            <h3 class="text-xl font-medium text-indigo-600">
                                Learning Tip
                            </h3>

                            <p class="mt-2 text-shadow-mauve-700 leading-relaxed text-slate-600">
                                Complete the videos in order to build a strong foundation.
                                Take notes and practice regularly!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            </div>

            <!-- this is the right section -->
            <div class="main__container__right flex flex-col space-y-5">

                <!-- About This Chapter -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6">

                    <div class="flex items-center justify-between">
                        <p>About this chapter</p>

                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 11.55L4.5 7.05002L5.30625 6.24377L9 9.93752L12.6938 6.24377L13.5 7.05002L9 11.55Z"
                                fill="#64748B" />
                        </svg>
                    </div>

                    <div class="mt-4 flex h-10 w-full items-center">

                        <div
                            class="flex h-full w-1/2 items-center gap-2 rounded-bl-2xl rounded-tl-2xl border border-slate-200 p-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.35 12.1313L12.225 8.9625L7.35 5.79375V12.1313ZM2.625 15C2.325 15 2.0625 14.8875 1.8375 14.6625C1.6125 14.4375 1.5 14.175 1.5 13.875V4.125C1.5 3.825 1.6125 3.5625 1.8375 3.3375C2.0625 3.1125 2.325 3 2.625 3H15.375C15.675 3 15.9375 3.1125 16.1625 3.3375C16.3875 3.5625 16.5 3.825 16.5 4.125V13.875C16.5 14.175 16.3875 14.4375 16.1625 14.6625C15.9375 14.8875 15.675 15 15.375 15H2.625ZM2.625 13.875H15.375V4.125H2.625V13.875Z"
                                    fill="#4F46E5" />
                            </svg>

                            <p class="text-base text-slate-700">4 videos</p>
                        </div>

                        <div
                            class="flex h-full w-1/2 items-center gap-2 rounded-br-2xl rounded-tr-2xl border border-slate-200 p-2">
                            <p class="text-xs text-slate-700">
                                Total length: 83:49 mins
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Up Next -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6">

                    <div class="flex items-center justify-between">
                        <h3>Up Next</h3>

                        <div class="flex items-center rounded-lg bg-indigo-100 px-4 py-1.5">
                            <span class="text-xs text-indigo-700">Lesson 3</span>
                        </div>
                    </div>

                    <div class="mt-3 flex items-start space-x-4">

                        <img src="basic-equations.png" alt="basic equations" />

                        <div class="flex flex-col space-y-2">

                            <div class="text-sm">
                                <p>Nature of Roots</p>
                                <p>21:10 min</p>
                            </div>

                            <p class="text-sm text-slate-700">
                                Learn about nature of roots using discriminant.
                            </p>

                            <button
                                class="flex items-center justify-between space-x-2 rounded-2xl border border-indigo-200 py-2 pl-4 pr-10">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.05 9.5L9.5 6.66667L5.05 3.83333V9.5ZM6.66667 13.3333C5.75556 13.3333 4.89444 13.1583 4.08333 12.8083C3.27222 12.4583 2.56389 11.9806 1.95833 11.375C1.35278 10.7694 0.875 10.0611 0.525 9.25C0.175 8.43889 0 7.57778 0 6.66667C0 5.74444 0.175 4.87778 0.525 4.06667C0.875 3.25556 1.35278 2.55 1.95833 1.95C2.56389 1.35 3.27222 0.875 4.08333 0.525C4.89444 0.175 5.75556 0 6.66667 0C7.58889 0 8.45555 0.175 9.26667 0.525C10.0778 0.875 10.7833 1.35 11.3833 1.95C11.9833 2.55 12.4583 3.25556 12.8083 4.06667C13.1583 4.87778 13.3333 5.74444 13.3333 6.66667C13.3333 7.57778 13.1583 8.43889 12.8083 9.25C12.4583 10.0611 11.9833 10.7694 11.3833 11.375C10.7833 11.9806 10.0778 12.4583 9.26667 12.8083C8.45555 13.1583 7.58889 13.3333 6.66667 13.3333ZM6.66667 12.3333C8.24444 12.3333 9.58333 11.7806 10.6833 10.675C11.7833 9.56944 12.3333 8.23333 12.3333 6.66667C12.3333 5.08889 11.7833 3.75 10.6833 2.65C9.58333 1.55 8.24444 1 6.66667 1C5.1 1 3.76389 1.55 2.65833 2.65C1.55278 3.75 1 5.08889 1 6.66667C1 8.23333 1.55278 9.56944 2.65833 10.675C3.76389 11.7806 5.1 12.3333 6.66667 12.3333Z"
                                        fill="#4F46E5" />
                                </svg>

                                <p class="text-sm text-indigo-700">Preview</p>
                            </button>

                        </div>
                    </div>

                </div>


                <!-- Chapter Resources -->
                <div class="rounded-2xl border border-slate-200 bg-white p-6">

                    <div class="flex flex-col space-y-4">

                        <h3>Chapter Resources</h3>


                        <!-- Formula Sheet -->
                        <div class="flex items-center space-x-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-100">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <g clip-path="url(#clip0_2556_1383)">
                                        <path
                                            d="M5.98125 13.3125H12.0188V12.1875H5.98125V13.3125ZM5.98125 10.125H12.0188V9H5.98125V10.125ZM4.125 16.5C3.825 16.5 3.5625 16.3875 3.3375 16.1625C3.1125 15.9375 3 15.675 3 15.375V2.625C3 2.325 3.1125 2.0625 3.3375 1.8375C3.5625 1.6125 3.825 1.5 4.125 1.5H10.8938L15 5.60625V15.375C15 15.675 14.8875 15.9375 14.6625 16.1625C14.4375 16.3875 14.175 16.5 13.875 16.5H4.125ZM10.3313 6.1125V2.625H4.125V15.375H13.875V6.1125H10.3313Z"
                                            fill="#16A34A" />
                                    </g>

                                    <defs>
                                        <clipPath id="clip0_2556_1383">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <div class="flex-8 shrink-0">
                                <h3>Formula Sheet - Quadratic Equations</h3>
                                <p class="text-xs text-slate-700">PDF . 1.2 MB</p>
                            </div>

                            <div class="flex-1 shrink-0">

                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 9.13125L2.38125 5.5125L3.1875 4.70625L5.4375 6.95625V0H6.5625V6.95625L8.8125 4.70625L9.61875 5.5125L6 9.13125ZM1.125 12C0.825 12 0.5625 11.8875 0.3375 11.6625C0.1125 11.4375 0 11.175 0 10.875V8.19375H1.125V10.875H10.875V8.19375H12V10.875C12 11.175 11.8875 11.4375 11.6625 11.6625C11.4375 11.8875 11.175 12 10.875 12H1.125Z"
                                        fill="#475569" />
                                </svg>

                            </div>

                        </div>


                        <!-- Important Notes -->
                        <div class="flex items-center space-x-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-100">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <g clip-path="url(#clip0_2556_1397)">
                                        <path
                                            d="M5.98125 13.3125H12.0188V12.1875H5.98125V13.3125ZM5.98125 10.125H12.0188V9H5.98125V10.125ZM4.125 16.5C3.825 16.5 3.5625 16.3875 3.3375 16.1625C3.1125 15.9375 3 15.675 3 15.375V2.625C3 2.325 3.1125 2.0625 3.3375 1.8375C3.5625 1.6125 3.825 1.5 4.125 1.5H10.8938L15 5.60625V15.375C15 15.675 14.8875 15.9375 14.6625 16.1625C14.4375 16.3875 14.175 16.5 13.875 16.5H4.125ZM10.3313 6.1125V2.625H4.125V15.375H13.875V6.1125H10.3313Z"
                                            fill="#2563EB" />
                                    </g>

                                    <defs>
                                        <clipPath id="clip0_2556_1397">
                                            <rect width="18" height="18" fill="white" />
                                        </clipPath>
                                    </defs>

                                </svg>
                            </div>

                            <div class="flex-8 shrink">
                                <h3>Important Notes</h3>
                                <p class="text-xs text-slate-700">PDF . 1.2 MB</p>
                            </div>

                            <div class="flex-1 shrink-0">

                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 9.13125L2.38125 5.5125L3.1875 4.70625L5.4375 6.95625V0H6.5625V6.95625L8.8125 4.70625L9.61875 5.5125L6 9.13125ZM1.125 12C0.825 12 0.5625 11.8875 0.3375 11.6625C0.1125 11.4375 0 11.175 0 10.875V8.19375H1.125V10.875H10.875V8.19375H12V10.875C12 11.175 11.8875 11.4375 11.6625 11.6625C11.4375 11.8875 11.175 12 10.875 12H1.125Z"
                                        fill="#475569" />
                                </svg>

                            </div>

                        </div>


                        <!-- Solved Examples -->
                        <div class="flex items-center space-x-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-100">
                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.98125 11.8125H9.01875V10.6875H2.98125V11.8125ZM2.98125 8.625H9.01875V7.5H2.98125V8.625ZM1.125 15C0.825 15 0.5625 14.8875 0.3375 14.6625C0.1125 14.4375 0 14.175 0 13.875V1.125C0 0.825 0.1125 0.5625 0.3375 0.3375C0.5625 0.1125 0.825 0 1.125 0H7.89375L12 4.10625V13.875C12 14.175 11.8875 14.4375 11.6625 14.6625C11.4375 14.8875 11.175 15 10.875 15H1.125ZM7.33125 4.6125V1.125H1.125V13.875H10.875V4.6125H7.33125Z"
                                        fill="#EA580C" />
                                </svg>
                            </div>

                            <div class="flex-8 shrink-0">
                                <h3>Solved Examples</h3>
                                <p class="text-xs text-slate-700">PDF . 1.2 MB</p>
                            </div>

                            <div class="flex-1 shrink-0">

                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 9.13125L2.38125 5.5125L3.1875 4.70625L5.4375 6.95625V0H6.5625V6.95625L8.8125 4.70625L9.61875 5.5125L6 9.13125ZM1.125 12C0.825 12 0.5625 11.8875 0.3375 11.6625C0.1125 11.4375 0 11.175 0 10.875V8.19375H1.125V10.875H10.875V8.19375H12V10.875C12 11.175 11.8875 11.4375 11.6625 11.6625C11.4375 11.8875 11.175 12 10.875 12H1.125Z"
                                        fill="#475569" />
                                </svg>

                            </div>

                        </div>

                    </div>
                </div>


                <!-- Need Help -->
                <div class="rounded-2xl border border-slate-200 bg-green-50 p-6">

                    <div class="flex items-center space-x-4">

                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <g clip-path="url(#clip0_2556_1431)">
                                    <path
                                        d="M9.53958 18.2084V17.0209H15.4375V15.9521H12.5083V10.0938H15.4375V8.74797C15.4375 7.11186 14.8635 5.70336 13.7156 4.52245C12.5677 3.34155 11.1757 2.7511 9.53958 2.7511C7.90347 2.7511 6.49826 3.34155 5.32396 4.52245C4.14965 5.70336 3.5625 7.11186 3.5625 8.74797V10.0938H6.49167V15.9521H3.5625C3.24583 15.9521 2.96875 15.8334 2.73125 15.5959C2.49375 15.3584 2.375 15.0813 2.375 14.7646V8.74797C2.375 7.76195 2.56302 6.83254 2.93906 5.95972C3.3151 5.08691 3.82639 4.32407 4.47292 3.67121C5.11944 3.01822 5.87944 2.5037 6.75292 2.12766C7.62652 1.75162 8.55673 1.5636 9.54354 1.5636C10.5305 1.5636 11.4561 1.75162 12.3203 2.12766C13.1845 2.5037 13.9337 3.01822 14.5677 3.67121C15.2016 4.32407 15.703 5.08691 16.0718 5.95972C16.4406 6.83254 16.625 7.76195 16.625 8.74797V17.0209C16.625 17.3376 16.5062 17.6146 16.2688 17.8521C16.0312 18.0896 15.7542 18.2084 15.4375 18.2084H9.53958ZM3.5625 14.7646H5.30417V11.2813H3.5625V14.7646ZM13.6958 14.7646H15.4375V11.2813H13.6958V14.7646Z"
                                        fill="#16A34A" />
                                </g>

                                <defs>
                                    <clipPath id="clip0_2556_1431">
                                        <rect width="19" height="19" fill="white" />
                                    </clipPath>
                                </defs>

                            </svg>
                        </div>

                        <div>
                            <p class="text-lg font-medium text-green-700">
                                Need Help?
                            </p>

                            <p class="mt-2 text-sm text-slate-700">
                                Ask your doubts or connect with your teacher
                            </p>
                        </div>

                    </div>

                    <button
                        class="mt-4 w-full cursor-pointer rounded-xl border border-green-200 bg-white py-2 font-thin text-green-700">
                        Ask doubt
                    </button>

                </div>

            </div>
        </section>
    </section>
</body>

</html>
