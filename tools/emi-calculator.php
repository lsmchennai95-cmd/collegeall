<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>EMI Calculator India — Calculate Home, Car & Personal Loan EMI in Rupees</title>
    <meta name="description" content="Calculate your EMI instantly in Indian Rupees. Enter loan amount, interest rate, tenure, processing fee, and prepayment to get accurate EMI, total interest, total payment, tax benefits, and a full amortization schedule with charts. Works for home, car, and personal loans.">
    <meta name="keywords" content="emi calculator, loan emi calculator, home loan emi calculator, personal loan emi, car loan emi, india emi calculator, interest calculator india, monthly emi calculator, amortization schedule india, rupee emi calculator, loan repayment calculator, emi chart">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://collegeall.com/assets/css/all.min.css">
    <style>
        :root {
            --primary-color: #10b981;
            --secondary-color: #059669;
            --accent-color: #34d399;
        }

        .emi-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 20px 0;
        }

        .input-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 25px;
        }

        .result-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            border-left: 5px solid var(--primary-color);
        }

        .slider-container {
            position: relative;
            margin: 30px 0;
        }

        .slider-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .emi-breakdown {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .comparison-card {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            color: white;
            border-radius: 15px;
            padding: 20px;
        }

        .form-range::-webkit-slider-thumb {
            background: var(--primary-color);
        }

        .form-range::-moz-range-thumb {
            background: var(--primary-color);
        }

        .currency-symbol {
            font-size: 0.8em;
            vertical-align: super;
        }
    </style>
</head>
<body class="bg-light">
    <?php echo file_get_contents('https://collegeall.com/header.php'); ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="emi-container">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold text-success">EMI Calculator</h1>
                        <p class="lead text-muted">Calculate your Equated Monthly Installments in Indian Rupees</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-card">
                                <h4 class="mb-4"><i class="fas fa-calculator me-2"></i>Loan Details</h4>
                                
                                <div class="slider-container">
                                    <label class="form-label">Loan Amount: ₹<span id="loanAmountValue">10,00,000</span></label>
                                    <input type="range" class="form-range" id="loanAmount" min="5000" max="50000000" value="1000000" step="5000">
                                    <div class="slider-labels">
                                        <small>₹5K</small>
                                        <small>₹5Cr</small>
                                    </div>
                                </div>

                                <div class="slider-container">
                                    <label class="form-label">Interest Rate: <span id="interestRateValue">8.5</span>%</label>
                                    <input type="range" class="form-range" id="interestRate" min="1" max="20" value="8.5" step="0.1">
                                    <div class="slider-labels">
                                        <small>5%</small>
                                        <small>20%</small>
                                    </div>
                                </div>

                                <div class="slider-container">
                                    <label class="form-label">Loan Tenure: <span id="loanTenureValue">20</span> years</label>
                                    <input type="range" class="form-range" id="loanTenure" min="1" max="30" value="20">
                                    <div class="slider-labels">
                                        <small>1 Year</small>
                                        <small>30 Years</small>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        <label class="form-label">Processing Fee (%)</label>
                                        <input type="number" class="form-control" id="processingFee" value="1" min="0" max="5" step="0.1">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Prepayment (₹)</label>
                                        <input type="number" class="form-control" id="prepayment" value="0" min="0">
                                    </div>
                                </div>
                            </div>

                            <div class="emi-breakdown mt-4">
                                <h5 class="mb-3"><i class="fas fa-chart-pie me-2"></i>EMI Breakdown</h5>
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="text-primary fw-bold fs-4" id="emiAmount">₹7,718</div>
                                        <small class="text-muted">Monthly EMI</small>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-success fw-bold fs-4" id="totalInterest">₹8,52,396</div>
                                        <small class="text-muted">Total Interest</small>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-info fw-bold fs-4" id="totalPayment">₹18,52,396</div>
                                        <small class="text-muted">Total Payment</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="result-card h-100">
                                <div class="text-center mb-4">
                                    <h4 class="text-success">Payment Schedule</h4>
                                    <p class="text-muted">Visual breakdown of your loan payments</p>
                                </div>

                                <div class="mb-4">
                                    <canvas id="emiChart" height="250"></canvas>
                                </div>

                                <div class="comparison-card mb-4">
                                    <h6><i class="fas fa-balance-scale me-2"></i>Interest vs Principal</h6>
                                    <div class="row text-center mt-3">
                                        <div class="col-6">
                                            <div class="fs-5 fw-bold">₹<span id="principalAmount">10,00,000</span></div>
                                            <small>Principal Amount</small>
                                        </div>
                                        <div class="col-6">
                                            <div class="fs-5 fw-bold">₹<span id="interestAmount">8,52,396</span></div>
                                            <small>Interest Payable</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-sm table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Processing Fee:</td>
                                                <td class="text-end">₹<span id="processingFeeAmount">10,000</span></td>
                                            </tr>
                                            <tr>
                                                <td>Effective Interest Rate:</td>
                                                <td class="text-end"><span id="effectiveRate">8.65</span>%</td>
                                            </tr>
                                            <tr>
                                                <td>Savings with Prepayment:</td>
                                                <td class="text-end text-success">₹<span id="prepaymentSavings">0</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0"><i class="fas fa-table me-2"></i>Amortization Schedule</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="table-success">
                                                <tr>
                                                    <th>Year</th>
                                                    <th>Principal (₹)</th>
                                                    <th>Interest (₹)</th>
                                                    <th>Balance (₹)</th>
                                                    <th>Tax Benefit (₹)</th>
                                                </tr>
                                            </thead>
                                            <tbody id="amortizationTable">
                                                <!-- Amortization data will be inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo file_get_contents('https://collegeall.com/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        class EMICalculator {
            constructor() {
                this.chart = null;
                this.init();
            }

            init() {
                this.bindEvents();
                this.calculateEMI();
            }

            bindEvents() {
                document.getElementById('loanAmount').addEventListener('input', () => this.updateValues());
                document.getElementById('interestRate').addEventListener('input', () => this.updateValues());
                document.getElementById('loanTenure').addEventListener('input', () => this.updateValues());
                document.getElementById('processingFee').addEventListener('input', () => this.calculateEMI());
                document.getElementById('prepayment').addEventListener('input', () => this.calculateEMI());
            }

            updateValues() {
                document.getElementById('loanAmountValue').textContent = this.formatIndianCurrency(document.getElementById('loanAmount').value);
                document.getElementById('interestRateValue').textContent = document.getElementById('interestRate').value;
                document.getElementById('loanTenureValue').textContent = document.getElementById('loanTenure').value;
                this.calculateEMI();
            }

            calculateEMI() {
                const principal = parseFloat(document.getElementById('loanAmount').value);
                const rate = parseFloat(document.getElementById('interestRate').value) / 100 / 12;
                const tenure = parseFloat(document.getElementById('loanTenure').value) * 12;
                const processingFee = parseFloat(document.getElementById('processingFee').value) / 100;
                const prepayment = parseFloat(document.getElementById('prepayment').value) || 0;

                // Calculate EMI
                const emi = principal * rate * Math.pow(1 + rate, tenure) / (Math.pow(1 + rate, tenure) - 1);
                
                // Calculate totals
                const totalPayment = emi * tenure;
                const totalInterest = totalPayment - principal;
                const processingFeeAmount = principal * processingFee;
                
                // Calculate effective interest rate considering processing fee
                const effectiveRate = ((totalInterest + processingFeeAmount) / principal / (tenure / 12) * 100).toFixed(2);

                // Update display
                document.getElementById('emiAmount').textContent = '₹' + this.formatIndianCurrency(Math.round(emi));
                document.getElementById('totalInterest').textContent = '₹' + this.formatIndianCurrency(Math.round(totalInterest));
                document.getElementById('totalPayment').textContent = '₹' + this.formatIndianCurrency(Math.round(totalPayment));
                document.getElementById('principalAmount').textContent = this.formatIndianCurrency(principal);
                document.getElementById('interestAmount').textContent = this.formatIndianCurrency(Math.round(totalInterest));
                document.getElementById('processingFeeAmount').textContent = this.formatIndianCurrency(Math.round(processingFeeAmount));
                document.getElementById('effectiveRate').textContent = effectiveRate;

                this.updateChart(principal, totalInterest);
                this.generateAmortizationSchedule(principal, rate, tenure, emi);
            }

            updateChart(principal, totalInterest) {
                const ctx = document.getElementById('emiChart').getContext('2d');
                
                if (this.chart) {
                    this.chart.destroy();
                }

                this.chart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Principal Amount', 'Total Interest'],
                        datasets: [{
                            data: [principal, totalInterest],
                            backgroundColor: ['#10b981', '#3b82f6'],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom'
                            },
                            tooltip: {
                                callbacks: {
                                    label: (context) => {
                                        const value = context.raw;
                                        return `₹${this.formatIndianCurrency(value)}`;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            generateAmortizationSchedule(principal, monthlyRate, tenure, emi) {
                const table = document.getElementById('amortizationTable');
                table.innerHTML = '';

                let balance = principal;
                let totalPrincipal = 0;
                let totalInterest = 0;
                let totalTaxBenefit = 0;

                for (let year = 1; year <= tenure / 12; year++) {
                    let yearPrincipal = 0;
                    let yearInterest = 0;

                    for (let month = 1; month <= 12; month++) {
                        const interest = balance * monthlyRate;
                        const principalPaid = emi - interest;
                        
                        yearPrincipal += principalPaid;
                        yearInterest += interest;
                        balance -= principalPaid;

                        if (balance < 0) balance = 0;
                    }

                    totalPrincipal += yearPrincipal;
                    totalInterest += yearInterest;
                    
                    // Calculate tax benefit (assuming 80C and 24(b) deductions)
                    const taxBenefit = Math.min(yearInterest, 200000) * 0.3; // 30% tax rate
                    totalTaxBenefit += taxBenefit;

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>Year ${year}</td>
                        <td>₹${this.formatIndianCurrency(Math.round(yearPrincipal))}</td>
                        <td>₹${this.formatIndianCurrency(Math.round(yearInterest))}</td>
                        <td>₹${this.formatIndianCurrency(Math.round(balance))}</td>
                        <td>₹${this.formatIndianCurrency(Math.round(taxBenefit))}</td>
                    `;
                    table.appendChild(row);
                }

                // Add total row
                const totalRow = document.createElement('tr');
                totalRow.className = 'table-success fw-bold';
                totalRow.innerHTML = `
                    <td>Total</td>
                    <td>₹${this.formatIndianCurrency(Math.round(totalPrincipal))}</td>
                    <td>₹${this.formatIndianCurrency(Math.round(totalInterest))}</td>
                    <td>-</td>
                    <td>₹${this.formatIndianCurrency(Math.round(totalTaxBenefit))}</td>
                `;
                table.appendChild(totalRow);
            }

            formatIndianCurrency(amount) {
                // Convert to Indian numbering system
                if (isNaN(amount)) return '0';
                
                const number = parseFloat(amount);
                if (number >= 10000000) {
                    return (number / 10000000).toFixed(2) + ' Cr';
                } else if (number >= 100000) {
                    return (number / 100000).toFixed(2) + ' L';
                } else {
                    return number.toLocaleString('en-IN');
                }
            }
        }

        // Initialize EMI Calculator
        const emiCalculator = new EMICalculator();
    </script>
</body>
</html>