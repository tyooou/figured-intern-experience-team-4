<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Prism\Prism\Prism;

class FinancialReportController extends Controller
{
    /**
     * Get financial report data for the Figured intern challenge
     */
    public function getFinancialReport(): JsonResponse
    {
        $reportData = [
            'company' => [
                'name' => 'Pam Testing Farm Operations',
                'report_type' => 'Profit & Loss',
                'basis' => 'Accrual basis',
                'period' => 'Actuals + Forecast for the period ending 31 March 2026',
                'actuals_to' => '31 July 2025'
            ],
            'columns' => [
                ['month' => 'Apr 25', 'type' => 'Actual'],
                ['month' => 'May 25', 'type' => 'Actual'],
                ['month' => 'Jun 25', 'type' => 'Actual'],
                ['month' => 'Jul 25', 'type' => 'Actual'],
                ['month' => 'Aug 25', 'type' => 'Forecast'],
                ['month' => 'Sep 25', 'type' => 'Forecast'],
                ['month' => 'Oct 25', 'type' => 'Forecast'],
                ['month' => 'Nov 25', 'type' => 'Forecast'],
                ['month' => 'Dec 25', 'type' => 'Forecast'],
                ['month' => 'Jan 26', 'type' => 'Forecast'],
                ['month' => 'Feb 26', 'type' => 'Forecast'],
                ['month' => 'Mar 26', 'type' => 'Forecast'],
                ['month' => 'Total', 'type' => 'Total']
            ],
            'sections' => [
                [
                    'id' => 'income',
                    'name' => 'Income',
                    'level' => 1,
                    'collapsible' => true,
                    'expanded' => true,
                    'subsections' => [
                        [
                            'id' => 'sheep',
                            'name' => 'Sheep',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'subsections' => [
                                [
                                    'id' => 'sheep_income',
                                    'name' => 'Income',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Sales',
                                            'account_id' => '7d05a53d-613d-4eb2-a2fc-dcb6adb80b80',
                                            'values' => [2174, 9072, 25245, 15127, 0, 0, 0, 0, 0, 0, 0, 0, 51618]
                                        ]
                                    ]
                                ],
                                [
                                    'id' => 'sheep_costs',
                                    'name' => 'Costs',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Purchases',
                                            'account_id' => '573a170b-6792-4cfa-b8ce-6f8fd27f5458',
                                            'values' => [0, 0, 10304, 730, 0, 0, 0, 0, 0, 0, 0, 0, 11035]
                                        ],
                                        [
                                            'name' => 'Rent',
                                            'account_id' => '28113b99-6df2-4123-a2d0-5f54dcf8017b',
                                            'values' => [0, 205, 205, 205, 0, 0, 0, 0, 0, 0, 0, 0, 616]
                                        ]
                                    ]
                                ]
                            ],
                            'gross_profit' => [
                                'name' => 'Sheep Gross Profit',
                                'values' => [2174, 8866, 14736, 14191, 0, 0, 0, 0, 0, 0, 0, 0, 39967]
                            ]
                        ],
                        [
                            'id' => 'wheat',
                            'name' => 'Wheat',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'subsections' => [
                                [
                                    'id' => 'wheat_costs',
                                    'name' => 'Costs',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Freight & Courier',
                                            'account_id' => 'b70cadef-d8aa-46e6-b128-79e2c997fd2c',
                                            'values' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 909, 909]
                                        ],
                                        [
                                            'name' => 'General Expenses',
                                            'account_id' => '11f618a8-f17e-4757-8b4a-6f24841bdb93',
                                            'values' => [3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, 6000]
                                        ],
                                        [
                                            'name' => 'Office Expenses',
                                            'account_id' => '935e0fbe-6749-41c8-a024-11321e44dfac',
                                            'values' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33000, 33000]
                                        ],
                                        [
                                            'name' => 'Rent',
                                            'account_id' => '28113b99-6df2-4123-a2d0-5f54dcf8017b',
                                            'values' => [0, 205, 205, 205, 0, 0, 0, 0, 0, 0, 0, 0, 616]
                                        ]
                                    ]
                                ]
                            ],
                            'gross_profit' => [
                                'name' => 'Wheat Gross Profit',
                                'values' => [-3000, -205, -205, -205, 0, 0, 0, 0, 0, 0, 0, -36909, -40525]
                            ]
                        ],
                        [
                            'id' => 'barley',
                            'name' => 'Barley',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'subsections' => [
                                [
                                    'id' => 'barley_costs',
                                    'name' => 'Costs',
                                    'level' => 3,
                                    'collapsible' => true,
                                    'expanded' => true,
                                    'line_items' => [
                                        [
                                            'name' => 'Advertising',
                                            'account_id' => 'faca213f-d588-48e9-8281-85b7f98da745',
                                            'values' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4000, 4000]
                                        ],
                                        [
                                            'name' => 'Freight & Courier',
                                            'account_id' => 'b70cadef-d8aa-46e6-b128-79e2c997fd2c',
                                            'values' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 91, 91]
                                        ],
                                        [
                                            'name' => 'Office Expenses',
                                            'account_id' => '935e0fbe-6749-41c8-a024-11321e44dfac',
                                            'values' => [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15000, 15000]
                                        ],
                                        [
                                            'name' => 'Rent',
                                            'account_id' => '28113b99-6df2-4123-a2d0-5f54dcf8017b',
                                            'values' => [0, 205, 205, 205, 0, 0, 0, 0, 0, 0, 0, 0, 616]
                                        ]
                                    ]
                                ]
                            ],
                            'gross_profit' => [
                                'name' => 'Barley Gross Profit',
                                'values' => [0, -205, -205, -205, 0, 0, 0, 0, 0, 0, 0, -19091, -19707]
                            ]
                        ]
                    ],
                    'total' => [
                        'name' => 'Gross Profit',
                        'values' => [-826, 8455, 14325, 13780, 0, 0, 0, 0, 0, 0, 0, -56000, -20266]
                    ]
                ],
                [
                    'id' => 'operating_expenses',
                    'name' => 'Operating Expenses',
                    'level' => 1,
                    'collapsible' => true,
                    'expanded' => true,
                    'subsections' => [
                        [
                            'id' => 'other_operating',
                            'name' => 'Other',
                            'level' => 2,
                            'collapsible' => true,
                            'expanded' => true,
                            'line_items' => [
                                [
                                    'name' => 'Advertising',
                                    'account_id' => 'faca213f-d588-48e9-8281-85b7f98da745',
                                    'values' => [0, 0, 6916, 602174, 0, 0, 0, 0, 0, 0, 0, 0, 609090]
                                ],
                                [
                                    'name' => 'Bank Fees',
                                    'account_id' => '19828003-cea7-4920-b0fa-9223a2cdb0dc',
                                    'values' => [15, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30]
                                ],
                                [
                                    'name' => 'Cleaning',
                                    'account_id' => 'a488538a-ce53-44b9-b529-4335d88acfa1',
                                    'values' => [0, 104, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 104]
                                ],
                                [
                                    'name' => 'Consulting & Accounting',
                                    'account_id' => '5f29a204-d41f-4727-9831-8f70b3ac4a95',
                                    'values' => [0, 49, 49, 49, 0, 0, 0, 0, 0, 0, 0, 0, 147]
                                ],
                                [
                                    'name' => 'Entertainment',
                                    'account_id' => '53fdcc86-32ee-4fcb-b053-f449405bc7a5',
                                    'values' => [0, 27, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 47]
                                ],
                                [
                                    'name' => 'Freight & Courier',
                                    'account_id' => 'b70cadef-d8aa-46e6-b128-79e2c997fd2c',
                                    'values' => [0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 100]
                                ],
                                [
                                    'name' => 'General Expenses',
                                    'account_id' => '11f618a8-f17e-4757-8b4a-6f24841bdb93',
                                    'values' => [0, 43, 26030, 113, 0, 0, 0, 0, 0, 0, 0, 0, 26186]
                                ],
                                [
                                    'name' => 'Legal expenses',
                                    'account_id' => '263ea0e4-4ee9-4585-ae1f-8180b9dbd864',
                                    'values' => [0, 0, 0, 12000, 0, 0, 0, 0, 0, 0, 0, 0, 12000]
                                ],
                                [
                                    'name' => 'Light, Power, Heating',
                                    'account_id' => '2e277847-022c-48f3-8467-0207230004d6',
                                    'values' => [104, 118, 0, 189, 0, 0, 0, 0, 0, 0, 0, 0, 411]
                                ],
                                [
                                    'name' => 'Motor Vehicle Expenses',
                                    'account_id' => 'b149780d-69bc-4f7c-a3ce-bd48f7a37de5',
                                    'values' => [0, 188, 129, 358, 0, 0, 0, 0, 0, 0, 0, 0, 675]
                                ],
                                [
                                    'name' => 'Office Expenses',
                                    'account_id' => '935e0fbe-6749-41c8-a024-11321e44dfac',
                                    'values' => [0, 86, 52, 52, 0, 0, 0, 0, 0, 0, 0, 0, 190]
                                ],
                                [
                                    'name' => 'Printing & Stationery',
                                    'account_id' => 'df1a5320-2622-4fde-9174-e3fbf3ad03ce',
                                    'values' => [19, 0, 68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 87]
                                ],
                                [
                                    'name' => 'Rent',
                                    'account_id' => '28113b99-6df2-4123-a2d0-5f54dcf8017b',
                                    'values' => [0, 205, 205, 205, 0, 0, 0, 0, 0, 0, 0, 0, 616]
                                ],
                                [
                                    'name' => 'Repairs and Maintenance',
                                    'account_id' => '65ad67a4-8641-45cf-9ab9-661878452c3f',
                                    'values' => [925, 0, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 985]
                                ],
                                [
                                    'name' => 'Subscriptions',
                                    'account_id' => '5ba8d64a-5b98-4bfd-a35e-7d0569e3446f',
                                    'values' => [0, 1273, 0, 13, 0, 0, 0, 0, 0, 0, 0, 0, 1286]
                                ],
                                [
                                    'name' => 'Telephone & Internet',
                                    'account_id' => '230e4cfc-f4c4-4c15-aa0d-bab02b954622',
                                    'values' => [39, 41, 0, 47, 0, 0, 0, 0, 0, 0, 0, 0, 127]
                                ],
                                [
                                    'name' => 'Travel - National',
                                    'account_id' => '36d33c5d-7dea-4911-9ed0-7fccc16f2b5f',
                                    'values' => [0, 30, 0, 210, 0, 0, 0, 0, 0, 0, 0, 0, 241]
                                ]
                            ]
                        ]
                    ],
                    'total' => [
                        'name' => 'Operating Expenses',
                        'values' => [1101, 2181, 33529, 615510, 0, 0, 0, 0, 0, 0, 0, 0, 652321]
                    ]
                ]
            ],
            'summary' => [
                [
                    'name' => 'Operating Surplus',
                    'values' => [-1927, 6275, -19205, -601730, 0, 0, 0, 0, 0, 0, 0, -56000, -672587]
                ],
                [
                    'name' => 'Net Profit',
                    'values' => [-1927, 6275, -19205, -601730, 0, 0, 0, 0, 0, 0, 0, -56000, -672587]
                ]
            ]
        ];

        return response()->json($reportData);
    }

    /**
     * Generate AI commentary using Prism
     */
    public function generateCommentary(Request $request): JsonResponse
    {
        try {
            // Check if OpenAI API key is configured
            if (empty(env('OPENAI_API_KEY'))) {
                return response()->json([
                    'error' => 'OpenAI API key not configured. Please add OPENAI_API_KEY to your .env file.'
                ], 500);
            }

            $prompt = $request->input('prompt', 'Provide general business insights');

            $response = Prism::text()
                ->using('openai', 'gpt-4')
                ->withPrompt($prompt)
                ->generate();

            return response()->json([
                'response' => $response->text
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to generate commentary: ' . $e->getMessage()
            ], 500);
        }
    }
}
