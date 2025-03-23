<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <!-- Include Navbar -->
    <?php include '../../components/navbar.php'; ?>

    <!-- Dashboard Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Sidebar -->
            <div class="w-full lg:w-64 bg-white dark:bg-gray-800 rounded-lg shadow-md p-4 md:sticky top-4 h-fit">
                <!-- Profile Section -->
                <div class="flex flex-col items-center mb-6">
                    <div class="relative w-24 h-24 mb-2">
                        <img src="https://images.unsplash.com/photo-1593229874334-90d965f27c42?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute bottom-0 right-0 p-1 bg-green-500 rounded-full"></div>
                    </div>
                    <h2 class="text-lg font-semibold text-center">John Doe</h2>
                </div>

                <!-- User Stats -->
                <div class="grid grid-cols-3 text-xs mb-6 text-center">
                    <?php
                    $stats = [
                        ['label' => 'Bits', 'value' => '250'],
                        ['label' => 'Country', 'value' => 'USA'],
                        ['label' => 'Verified', 'value' => 'Yes']
                    ];

                    foreach ($stats as $stat): ?>
                        <div class="flex flex-col">
                            <span class="font-medium text-gray-900 dark:text-white"><?= $stat['label'] ?></span>
                            <span class="text-gray-500 dark:text-gray-400"><?= $stat['value'] ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Navigation -->
                <nav class="space-y-1">
                    <?php
                    $navItems = [
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>',
                            'text' => 'Dashboard',
                            'active' => true
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" /></svg>',
                            'text' => 'Collection'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" /><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" /></svg>',
                            'text' => 'Orders'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" /></svg>',
                            'text' => 'Bits Scheme'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100 4h2a2 2 0 100-4h-2z" /></svg>',
                            'text' => 'Earn Bits'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" /><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" /></svg>',
                            'text' => 'Winning Bits'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>',
                            'text' => 'Achievements'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" /></svg>',
                            'text' => 'Settings'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" /></svg>',
                            'text' => 'Log Out'
                        ]
                    ];

                    foreach ($navItems as $item):
                        $activeClass = isset($item['active']) && $item['active']
                            ? 'bg-gray-200 dark:bg-gray-700 text-purple-600 dark:text-purple-400'
                            : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700';
                    ?>
                        <a href="#" class="flex items-center space-x-3 <?= $activeClass ?> px-4 py-3 rounded-lg transition-colors">
                            <?= $item['icon'] ?>
                            <span><?= $item['text'] ?></span>
                        </a>
                    <?php endforeach; ?>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <!-- Dashboard Content -->
                <div id="dashboardContent">
                    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <?php
                        $statsCards = [
                            [
                                'title' => 'Total Collection',
                                'value' => '40,689',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500 dark:text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>',
                                'color' => 'indigo'
                            ],
                            [
                                'title' => 'Total Order',
                                'value' => '10293',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500 dark:text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10m-7 4h7" /></svg>',
                                'color' => 'amber'
                            ],
                            [
                                'title' => 'Winning Bits',
                                'value' => '5123',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 dark:text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>',
                                'color' => 'green'
                            ],
                            [
                                'title' => 'Achievement',
                                'value' => '7654',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rose-500 dark:text-rose-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 10c-2.21 0-4-1.79-4-4h8c0 2.21-1.79-4-4-4zm0-14c-2.21 0-4 1.79-4 4h8c0-2.21-1.79-4-4-4z" /></svg>',
                                'color' => 'rose'
                            ]
                        ];

                        foreach ($statsCards as $card): ?>
                            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md flex justify-between items-center">
                                <div>
                                    <h2 class="text-sm text-gray-500 dark:text-gray-400 mb-1"><?= $card['title'] ?></h2>
                                    <p class="text-xl font-bold"><?= $card['value'] ?></p>
                                </div>
                                <div class="bg-<?= $card['color'] ?>-100 dark:bg-<?= $card['color'] ?>-900 p-3 rounded-full">
                                    <?= $card['icon'] ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Charts and Tables Section -->
                    <div class="space-y-6">
                        <!-- Bits Details Chart -->
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-lg font-bold">Bits Details</h2>
                                <select class="bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 text-sm">
                                    <?php
                                    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                    foreach ($months as $month): ?>
                                        <option value="<?= strtolower($month) ?>"><?= $month ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Chart Container -->
                            <div class="relative h-64">
                                <canvas id="bitsChart"></canvas>
                            </div>
                        </div>

                        <!-- Orders Table -->
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-lg font-bold">Recent Orders</h2>
                                <select class="bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg px-4 py-2 text-sm">
                                    <?php foreach ($months as $month): ?>
                                        <option value="<?= strtolower($month) ?>"><?= $month ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                        <tr class="bg-gray-50 dark:bg-gray-700">
                                            <th class="px-4 py-3 text-left">Product Name</th>
                                            <th class="px-4 py-3 text-left">Location</th>
                                            <th class="px-4 py-3 text-left">Date - Time</th>
                                            <th class="px-4 py-3 text-center">Piece</th>
                                            <th class="px-4 py-3 text-left">Amount</th>
                                            <th class="px-4 py-3 text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3">Apple Watch</td>
                                            <td class="px-4 py-3">6096 Marjolaine Landing</td>
                                            <td class="px-4 py-3">12.09.2019 - 12:53 PM</td>
                                            <td class="px-4 py-3 text-center">423</td>
                                            <td class="px-4 py-3">$34,295</td>
                                            <td class="px-4 py-3">
                                                <span class=" flex justify-center items-center  px-3 py-1 text-xs rounded-full bg-emerald-100 text-emerald-800 dark:bg-emerald-800 dark:text-emerald-100">Delivered</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3">Apple Watch</td>
                                            <td class="px-4 py-3">6096 Marjolaine Landing</td>
                                            <td class="px-4 py-3">12.09.2019 - 12:53 PM</td>
                                            <td class="px-4 py-3 text-center">423</td>
                                            <td class="px-4 py-3">$34,295</td>
                                            <td class="px-4 py-3">
                                                <span class="flex justify-center items-center  px-3 py-1 text-xs rounded-full bg-amber-100 text-amber-800 dark:bg-amber-800 dark:text-amber-100">Pending</span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3">Apple Watch</td>
                                            <td class="px-4 py-3">6096 Marjolaine Landing</td>
                                            <td class="px-4 py-3">12.09.2019 - 12:53 PM</td>
                                            <td class="px-4 py-3 text-center">423</td>
                                            <td class="px-4 py-3">$34,295</td>
                                            <td class="px-4 py-3">
                                                <span class="flex justify-center items-center px-3 py-1 text-xs rounded-full bg-red-100 text-red-800 dark:bg-red-800 dark:text-red-100">Rejected</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection Content -->
                <div id="collectionContent" class="hidden">
                    <!-- Collection Section -->
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <h1 class="text-2xl font-bold mb-6">Collection</h1>

                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-sm border border-gray-100 dark:border-gray-600 overflow-hidden">
                                <!-- Header Row -->
                                <div class="flex justify-between items-center px-6 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                                    <div class="font-medium text-gray-900 dark:text-white">Console</div>
                                    <div class="font-medium text-gray-900 dark:text-white">Color</div>
                                </div>

                                <!-- Data Rows -->
                                <div class="divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php
                                    $items = array_fill(0, 10, [
                                        'console' => 'Lorem ipsum dolor sit amet',
                                        'color' => 'Red'
                                    ]);

                                    foreach ($items as $item): ?>
                                        <div class="flex justify-between items-center px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-150">
                                            <div class="text-gray-700 dark:text-gray-300"><?= $item['console'] ?></div>
                                            <div class="text-gray-700 dark:text-gray-300"><?= $item['color'] ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Orders Content -->
                <div id="orderContent" class="hidden">
                    <!-- Order Section -->
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <h1 class="text-2xl font-bold mb-6">Orders</h1>

                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-sm border border-gray-100 dark:border-gray-600 overflow-hidden">
                                <!-- Header Row -->
                                <div class="grid grid-cols-2 sm:flex justify-between items-center px-6 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                                    <div class="font-medium text-gray-900 dark:text-white text-left">Order</div>
                                    <div class="w-full sm:w-24 text-center font-medium text-gray-900 dark:text-white">Status</div>
                                </div>

                                <!-- Data Rows -->
                                <div class="divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php
                                    // Sample dynamic order descriptions
                                    $orderDescriptions = [
                                        "Order for gaming asdaskdjdjaslkdjdklasjdlkd asjdasdjaskjlkdas",
                                        "Smartphone purchase request",
                                        "New headphones order",
                                        "Office chair delivery",
                                        "Subscription renewal",
                                        "Tablet purchase request",
                                        "Monitor replacement order",
                                        "Software license renewal"
                                    ];

                                    // Different statuses
                                    $statuses = [
                                        ["text" => "Completed", "bg" => "bg-green-200", "textColor" => "text-green-700"],
                                        ["text" => "Processing", "bg" => "bg-blue-200", "textColor" => "text-blue-700"],
                                        ["text" => "Rejected", "bg" => "bg-red-200", "textColor" => "text-red-700"]
                                    ];

                                    // Loop dynamically through the array
                                    foreach ($orderDescriptions as $index => $orderText):
                                        $status = $statuses[$index % count($statuses)]; // Cycle through statuses dynamically
                                    ?>
                                        <div class="grid grid-cols-[1fr_auto] sm:flex justify-between items-center px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-150">
                                            <div class="w-[200px] sm:w-auto text-gray-700 dark:text-gray-300 text-left break-words">
                                                <?= htmlspecialchars($orderText) ?>
                                            </div>
                                            <div class="<?= $status['bg'] ?> <?= $status['textColor'] ?> min-w-[100px] w-auto text-center px-3 py-1 rounded-full text-sm font-semibold">
                                                <?= $status['text'] ?>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Bits Scheme Content -->
                <div id="bitsSchemeContent" class="hidden">
                    <!-- Bits Scheme Section -->
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <h1 class="text-2xl font-bold mb-6">Bits Scheme</h1>

                            <!-- Conversion Rate -->
                            <div class="text-center mb-6">
                                <p class="text-gray-700 dark:text-gray-300 mb-2">1 Pound Sterling is equal to</p>
                                <p class="text-2xl font-bold">100 bits</p>
                            </div>

                            <!-- Discord link -->
                            <div class="text-center mb-6">
                                <p class="text-gray-700 dark:text-gray-300">
                                    Find bits' rules on Discord
                                    <a href="#" class="text-indigo-400 hover:text-indigo-300">here!</a>
                                </p>
                            </div>

                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-sm border border-gray-100 dark:border-gray-600 overflow-hidden">
                                <!-- Header Row -->
                                <div class="grid grid-cols-2 sm:flex justify-between items-center px-6 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                                    <div class="font-medium text-gray-900 dark:text-white text-left">Action</div>
                                    <div class="w-full sm:w-24 text-center font-medium text-gray-900 dark:text-white">Reward</div>
                                </div>

                                <!-- Data Rows -->
                                <div class="divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php
                                    // Sample dynamic actions
                                    $actions = [
                                        "Order for gaming",
                                        "Smartphone purchase request",
                                        "New headphones order",
                                        "Office chair delivery",
                                        "Subscription renewal",
                                        "Tablet purchase request",
                                        "Monitor replacement order",
                                        "Software license renewal"
                                    ];

                                    // Sample reward values
                                    $rewards = [10, 15, 4, 20, 12, 8, 18, 7];

                                    // Loop dynamically through the array
                                    foreach ($actions as $index => $actionText):
                                    ?>
                                        <div class="grid grid-cols-[1fr_auto] sm:flex justify-between items-center px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-150">
                                            <div class="w-[200px] sm:w-auto text-gray-700 dark:text-gray-300 text-left break-words">
                                                <?= htmlspecialchars($actionText) ?>
                                            </div>
                                            <div class="min-w-[100px] w-auto text-center px-3 py-1 rounded-full text-sm font-semibold">
                                                <?= $rewards[$index] ?> <!-- Display reward value -->
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Earn Bit Content -->
                <div id="earnBitsContent" class="hidden">
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <h2 class="text-2xl font-semibold p-6 pb-3">Earn Bits</h2>
                            <div class="p-6 pt-3">
                                <form id="earnBitsForm">

                                    <div class="mb-4">
                                        <label for="bits" class="block mb-2">Select an Option</label>
                                        <select
                                            id="bits"
                                            class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-gray-500 dark:text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                            <option value="" disabled selected>Select an option</option>
                                            <option value="option1">Option 1</option>
                                            <option value="option2">Option 2</option>
                                            <option value="option3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label for="description" class="block mb-2">Your Message</label>
                                        <textarea
                                            id="description"
                                            class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500"
                                            placeholder="Write your thoughts here..."></textarea>
                                    </div>

                                    <!-- Image Upload -->
                                    <div class="mb-6">
                                        <label class="block mb-2">Add images</label>
                                        <div class="flex items-start">
                                            <div class="w-24 h-24 bg-gray-100 dark:bg-gray-700 border border-dashed border-gray-500 rounded-md flex items-center justify-center cursor-pointer hover:bg-gray-600 transition">
                                                <div class="text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <button class="mx-auto w-full mt-2 text-center bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300 group">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Winning Bits Content -->
                <div id="winnigBitsContent" class="hidden">
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <h1 class="text-2xl font-bold mb-6">Winning Bits</h1>

                            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-sm border border-gray-100 dark:border-gray-600 overflow-hidden">
                                <!-- Header Row -->
                                <div class="grid grid-cols-4 px-6 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-600">
                                    <div class="font-medium text-gray-900 dark:text-white text-left">Info</div>
                                    <div class="font-medium text-gray-900 dark:text-white text-left">Date</div>
                                    <div class="font-medium text-gray-900 dark:text-white text-left">Bits</div>
                                    <div class="font-medium text-gray-900 dark:text-white text-center">Status</div>
                                </div>

                                <!-- Data Rows -->
                                <div class="divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php
                                    // Sample dynamic Winning Bits descriptions
                                    $winningBitsDescription = [
                                        "Order for gaming",
                                        "Smartphone purchase request",
                                        "New headphones order",
                                        "Office chair delivery",
                                        "Subscription renewal",
                                        "Tablet purchase request",
                                        "Monitor replacement order",
                                        "Software license renewal"
                                    ];

                                    // Sample dates
                                    $dates = [
                                        "12 Feb 2025",
                                        "15 Mar 2025",
                                        "20 Apr 2025",
                                        "5 May 2025",
                                        "18 Jun 2025",
                                        "22 Jul 2025",
                                        "30 Aug 2025",
                                        "10 Sep 2025"
                                    ];

                                    // Sample bits values
                                    $bits = [12, 14, 20, 8, 16, 25, 10, 18];

                                    // Different statuses
                                    $statuses = [
                                        ["text" => "Completed", "bg" => "bg-green-200", "textColor" => "text-green-700"],
                                        ["text" => "Processing", "bg" => "bg-blue-200", "textColor" => "text-blue-700"],
                                        ["text" => "Rejected", "bg" => "bg-red-200", "textColor" => "text-red-700"]
                                    ];

                                    // Loop dynamically through the array
                                    foreach ($winningBitsDescription as $index => $winningBitsText):
                                        $status = $statuses[$index % count($statuses)]; // Cycle through statuses dynamically
                                    ?>
                                        <div class="grid grid-cols-4 px-6 py-4 hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-150">
                                            <div class="text-gray-700 dark:text-gray-300 text-left break-words">
                                                <?= htmlspecialchars($winningBitsText) ?>
                                            </div>
                                            <div class="text-gray-700 dark:text-gray-300 text-left">
                                                <?= $dates[$index] ?>
                                            </div>
                                            <div class="text-gray-700 dark:text-gray-300 text-left">
                                                <?= $bits[$index] ?>
                                            </div>
                                            <div class="text-center mx-auto px-3 py-1 rounded-full text-sm font-semibold w-24 h-8 flex items-center justify-center <?= $status['bg'] ?> <?= $status['textColor'] ?>">
                                                <?= $status['text'] ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Achievements Content -->
                <div id="achievementsContent" class="hidden">
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <div class="max-w-6xl mx-auto">
                                <h1 class="text-2xl font-bold mb-8 text-gray-900 dark:text-white">Achievement</h1>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <?php
                                    $achievements = [
                                        [
                                            'name' => 'Achievement Name 1',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '8.80',
                                            'rarity' => 'Very Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 2',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '8.80',
                                            'rarity' => 'Very Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 3',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '10.80',
                                            'rarity' => 'Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 4',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '12.80',
                                            'rarity' => 'Very Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 5',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '11.80',
                                            'rarity' => 'Very Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 6',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '5.80',
                                            'rarity' => 'Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 7',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '4.20',
                                            'rarity' => 'Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 8',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '5.20',
                                            'rarity' => 'Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 9',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '2.80',
                                            'rarity' => 'Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                        [
                                            'name' => 'Achievement Name 10',
                                            'description' => 'Lorem ipsum dolor sit amet.',
                                            'percentage' => '15.80',
                                            'rarity' => 'Rare',
                                            'image' => 'https://images.unsplash.com/photo-1593118247619-e2d6f056869e?q=80&w=2070'
                                        ],
                                    ];

                                    foreach ($achievements as $achievement): ?>
                                        <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-4 flex items-start transform hover:scale-[1.02] transition-all duration-300">
                                            <div class="w-16 h-16 bg-gray-200 dark:bg-gray-600 mr-4 flex-shrink-0 shadow-sm rounded-lg overflow-hidden">
                                                <img src="<?= $achievement['image'] ?>"
                                                    alt="<?= $achievement['name'] ?>"
                                                    class="w-full h-full object-cover"
                                                    loading="lazy" />
                                            </div>
                                            <div class="flex-grow">
                                                <h3 class="font-medium text-lg text-gray-900 dark:text-white">
                                                    <?= $achievement['name'] ?>
                                                </h3>
                                                <p class="text-gray-600 dark:text-gray-300 text-sm">
                                                    <?= $achievement['description'] ?>
                                                </p>
                                            </div>
                                            <div class="flex flex-col items-end">
                                                <span class="text-purple-600 dark:text-purple-400 font-medium">
                                                    <?= $achievement['percentage'] ?>%
                                                </span>
                                                <span class="text-purple-600 dark:text-purple-400 text-xs">
                                                    <?= $achievement['rarity'] ?>
                                                </span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

                <!-- Settings Content -->
                <div id="settingsContent" class="hidden">
                    <section class="bg-gray-50 dark:bg-gray-800 p-4">
                        <div class="max-w-5xl mx-auto">
                            <!-- Header Section -->
                            <div class="mb-6">
                                <h1 class="text-3xl font-medium text-gray-800 dark:text-gray-100">Welcome, Moni Roy</h1>
                                <p class="text-gray-500 mt-1">Sun, 23 March 2025</p>
                            </div>

                            <!-- Gradient Banner -->
                            <div class="w-full h-20 rounded-lg bg-primary-gradient mb-6"></div>
                            <!-- Profile Header Section -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
                                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                                    <div class="flex flex-col md:flex-row items-center gap-4">
                                        <div class="w-16 h-16 rounded-full overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1557862921-37829c790f19"
                                                alt="Profile picture"
                                                class="w-full h-full object-cover"
                                                loading="lazy" />
                                        </div>
                                        <div class="text-center md:text-left">
                                            <h2 class="text-xl font-medium dark:text-white">Moni Roy</h2>
                                            <p class="text-gray-500 dark:text-gray-400">alexarawles@gmail.com</p>
                                        </div>
                                    </div>
                                    <button class="w-full md:w-auto bg-primary-gradient text-white px-6 py-2 rounded-lg flex items-center justify-center gap-2 hover:shadow-lg transition-all duration-300">
                                        Edit Profile
                                    </button>
                                </div>
                            </div>

                            <!-- Form Fields -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <?php
                                    $formFields = [
                                        ['label' => 'Full Name', 'type' => 'text'],
                                        ['label' => 'Nick Name', 'type' => 'text'],
                                        ['label' => 'Gender', 'type' => 'select'],
                                        ['label' => 'Country', 'type' => 'select'],
                                        ['label' => 'Language', 'type' => 'select'],
                                        ['label' => 'Time Zone', 'type' => 'select']
                                    ];

                                    foreach ($formFields as $field): ?>
                                        <div>
                                            <label class="block text-gray-700 dark:text-gray-300 mb-2"><?= $field['label'] ?></label>
                                            <?php if ($field['type'] === 'text'): ?>
                                                <input type="text"
                                                    placeholder="Enter <?= $field['label'] ?>"
                                                    class="w-full p-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 
                                          text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                            <?php else: ?>
                                                <div class="relative">
                                                    <select class="w-full p-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 
                                             text-gray-900 dark:text-gray-100 appearance-none focus:outline-none focus:ring-2 focus:ring-purple-500">
                                                        <option>Select <?= $field['label'] ?></option>
                                                    </select>
                                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Email Section -->
                                <div class="mt-8">
                                    <h3 class="text-lg font-medium mb-4 dark:text-white">My Email Addresses</h3>
                                    <div class="flex items-center mb-4 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                        <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center mr-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 dark:text-purple-300" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 dark:text-gray-200">alexarawles@gmail.com</p>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm">1 month ago</p>
                                        </div>
                                    </div>

                                    <button class="bg-primary-gradient text-white px-4 py-2 rounded-lg flex items-center text-sm hover:shadow-lg transition-all duration-300">
                                        <span class="mr-2">+</span>Add Email Address
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
    <!-- Include Footer -->
    <?php include '../../components/footer.php'; ?>

    <script src="../../js/theme.js"></script>
    <script src="../../js/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('bitsChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    datasets: [{
                        label: 'Bits Earned',
                        data: [{
                                x: 5,
                                y: 20
                            },
                            {
                                x: 7,
                                y: 30
                            },
                            {
                                x: 10,
                                y: 50
                            },
                            {
                                x: 13,
                                y: 55
                            },
                            {
                                x: 15,
                                y: 35
                            },
                            {
                                x: 17,
                                y: 57
                            },
                            {
                                x: 20,
                                y: 90
                            },
                            {
                                x: 23,
                                y: 55
                            },
                            {
                                x: 28,
                                y: 57
                            },
                            {
                                x: 33,
                                y: 25
                            },
                            {
                                x: 38,
                                y: 35
                            },
                            {
                                x: 43,
                                y: 50
                            },
                            {
                                x: 42,
                                y: 70
                            },
                            {
                                x: 45,
                                y: 60
                            },
                            {
                                x: 50,
                                y: 50
                            },
                            {
                                x: 55,
                                y: 40
                            },
                            {
                                x: 57,
                                y: 60
                            },
                            {
                                x: 60,
                                y: 65
                            },
                        ],
                        borderColor: 'rgb(99, 102, 241)',
                        borderWidth: 2,
                        backgroundColor: 'rgba(99, 102, 241, 0.2)',
                        tension: 0, // Sharp edges
                        fill: true,
                        showLine: true,
                        pointRadius: 4,
                        pointBackgroundColor: 'rgb(99, 102, 241)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            type: 'linear', // Ensures correct spacing
                            position: 'bottom',
                            min: 5, // Start from 5K
                            max: 60, // End at 60K
                            ticks: {
                                stepSize: 5, // Increments of 5K
                                callback: function(value) {
                                    return value + 'K'; // Format x-axis labels
                                }
                            },
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: false,
                            min: 20,
                            max: 100,
                            ticks: {
                                stepSize: 20,
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            const dashboardContent = document.getElementById('dashboardContent');
            const collectionContent = document.getElementById('collectionContent');
            const orderContent = document.getElementById('orderContent');
            const bitsSchemeContent = document.getElementById('bitsSchemeContent');
            const earnBitsContent = document.getElementById('earnBitsContent');
            const winnigBitsContent = document.getElementById('winnigBitsContent');
            const achievementsContent = document.getElementById('achievementsContent');
            const settingsContent = document.getElementById('settingsContent');
            const sidebarNavItems = document.querySelectorAll('.w-full.lg\\:w-64 nav a'); // Select only sidebar nav items
            const navItems = document.querySelectorAll('nav a');

            sidebarNavItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent default only for sidebar links
                    const text = this.textContent.trim();

                    // Reset all nav items
                    navItems.forEach(navItem => {
                        navItem.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-purple-600', 'dark:text-purple-400');
                        navItem.classList.add('text-gray-700', 'dark:text-gray-300', 'hover:bg-gray-200', 'dark:hover:bg-gray-700');
                    });

                    // Set active nav item
                    this.classList.remove('text-gray-700', 'dark:text-gray-300', 'hover:bg-gray-200', 'dark:hover:bg-gray-700');
                    this.classList.add('bg-gray-200', 'dark:bg-gray-700', 'text-purple-600', 'dark:text-purple-400');

                    // Show/hide content
                    if (text === 'Collection') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.remove('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Dashboard') {
                        dashboardContent.classList.remove('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Orders') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.remove('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Bits Scheme') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.remove('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Earn Bits') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.remove('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Winning Bits') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.remove('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Achievements') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.remove('hidden')
                        settingsContent.classList.add('hidden')
                    } else if (text === 'Settings') {
                        dashboardContent.classList.add('hidden')
                        collectionContent.classList.add('hidden')
                        orderContent.classList.add('hidden')
                        bitsSchemeContent.classList.add('hidden')
                        earnBitsContent.classList.add('hidden')
                        winnigBitsContent.classList.add('hidden')
                        achievementsContent.classList.add('hidden')
                        settingsContent.classList.remove('hidden')
                    }
                });
            });
        });
    </script>


</body>

</html>