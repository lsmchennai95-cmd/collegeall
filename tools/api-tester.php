<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>API Tester — Online REST API Client with Auth, Headers & JSON Formatter</title>
    <meta name="description" content="Test any REST API online with this advanced API Tester. Send GET, POST, PUT, DELETE, or PATCH requests with custom headers, JSON body, authentication (Bearer, Basic, API Key), timeout control, and live response formatting. Save request history and collections for fast reuse.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/api-tester.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="API Tester — Online REST API Client with Auth, Headers & JSON Formatter">
    <meta property="og:description" content="Test any REST API online with this advanced API Tester. Send GET, POST, PUT, DELETE, or PATCH requests with custom headers, JSON body, authentication (Bearer, Basic, API Key), timeout control, and live response formatting. Save request history and collections for fast reuse.">
    <meta property="og:url" content="https://collegeall.com/tools/api-tester.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="API Tester — Online REST API Client with Auth, Headers & JSON Formatter">
    <meta name="twitter:description" content="Test any REST API online with this advanced API Tester. Send GET, POST, PUT, DELETE, or PATCH requests with custom headers, JSON body, authentication (Bearer, Basic, API Key), timeout control, and live response formatting. Save request history and collections for fast reuse.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "API Tester",
      "description": "Test any REST API online with this advanced API Tester. Send GET, POST, PUT, DELETE, or PATCH requests with custom headers, JSON body, authentication (Bearer, Basic, API Key), timeout control, and live response formatting. Save request history and collections for fast reuse.",
      "url": "https://collegeall.com/tools/api-tester.php",
      "applicationCategory": "EducationalApplication",
      "operatingSystem": "All",
      "browserRequirements": "Requires JavaScript",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
      },
      "publisher": {
        "@type": "Organization",
        "name": "CollegeAll",
        "url": "https://collegeall.com/",
        "logo": "https://api.collegeall.com/Logo/collegeallLogo.png"
      }
    }
    </script>
    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">    <meta name="keywords" content="api tester, online api tester, rest api client, json api tester, test api online, api tool, http request tester, postman alternative, api headers tester, bearer token tester, api key tester, basic auth api test, debug api online, web api testing tool">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    <link rel="stylesheet" href="../index.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">    <style>        :root {            --primary-color: #4361ee;            --secondary-color: #3a0ca3;        }        .api-tester-container {            background: white;            border-radius: 20px;            box-shadow: 0 15px 50px rgba(0,0,0,0.1);            padding: 30px;            margin: 20px 0;        }        .method-badge {            padding: 8px 16px;            border-radius: 8px;            font-weight: 600;        }        .method-get { background: #d4edda; color: #155724; }        .method-post { background: #d1ecf1; color: #0c5460; }        .method-put { background: #fff3cd; color: #856404; }        .method-delete { background: #f8d7da; color: #721c24; }        .method-patch { background: #e2e3e5; color: #383d41; }        .response-area {            min-height: 300px;            max-height: 500px;            font-family: 'Courier New', monospace;            font-size: 14px;        }        .history-item {            border-left: 4px solid #4361ee;            padding: 10px 15px;            margin: 5px 0;            background: #f8f9fa;            border-radius: 0 8px 8px 0;            cursor: pointer;            transition: all 0.3s ease;        }        .history-item:hover {            background: #e9ecef;            transform: translateX(5px);        }        .tab-pane {            padding: 20px;            border: 1px solid #dee2e6;            border-top: none;            border-radius: 0 0 8px 8px;        }    </style></head>
<body class="bg-light">
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="api-tester-container">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold text-primary">Advanced API Tester</h1>
                        <p class="lead text-muted">Test and debug your APIs with ease</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#request">Request</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#headers">Headers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#body">Body</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#auth">Authentication</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="request">
                                            <div class="row align-items-center mb-3">
                                                <div class="col-auto">
                                                    <select class="form-select" id="httpMethod">
                                                        <option value="GET" class="method-get">GET</option>
                                                        <option value="POST" class="method-post">POST</option>
                                                        <option value="PUT" class="method-put">PUT</option>
                                                        <option value="DELETE" class="method-delete">DELETE</option>
                                                        <option value="PATCH" class="method-patch">PATCH</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="url" class="form-control" id="apiUrl" 
                                                           placeholder="https://api.example.com/endpoint">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn btn-primary" id="sendRequest">
                                                        <i class="fas fa-paper-plane me-2"></i>Send
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Content Type</label>
                                                    <select class="form-select" id="contentType">
                                                        <option value="application/json">application/json</option>
                                                        <option value="application/xml">application/xml</option>
                                                        <option value="application/x-www-form-urlencoded">form-data</option>
                                                        <option value="text/plain">text/plain</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Timeout (seconds)</label>
                                                    <input type="number" class="form-control" id="timeout" value="30" min="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="headers">
                                            <div id="headersContainer">
                                                <div class="row header-row mb-2">
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" placeholder="Header name">
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" placeholder="Header value">
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-outline-danger w-100 remove-header">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary mt-2" id="addHeader">
                                                <i class="fas fa-plus me-2"></i>Add Header
                                            </button>
                                        </div>

                                        <div class="tab-pane fade" id="body">
                                            <textarea class="form-control" id="requestBody" rows="12" 
                                                      placeholder='{"key": "value"}'></textarea>
                                        </div>

                                        <div class="tab-pane fade" id="auth">
                                            <div class="mb-3">
                                                <label class="form-label">Authentication Type</label>
                                                <select class="form-select" id="authType">
                                                    <option value="none">No Auth</option>
                                                    <option value="bearer">Bearer Token</option>
                                                    <option value="basic">Basic Auth</option>
                                                    <option value="apiKey">API Key</option>
                                                </select>
                                            </div>

                                            <div id="authFields">
                                                <!-- Dynamic auth fields will be inserted here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Response</h5>
                                    <div>
                                        <span class="badge bg-secondary me-2" id="responseStatus">Status: -</span>
                                        <span class="badge bg-secondary" id="responseTime">Time: -</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <pre class="response-area bg-light p-3 rounded" id="responseText">Response will appear here...</pre>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Request History</h5>
                                    <button class="btn btn-sm btn-outline-danger" id="clearHistory">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div id="requestHistory">
                                        <!-- History items will be inserted here -->
                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Collections</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <button class="btn btn-outline-primary w-100 mb-2" id="saveToCollection">
                                            <i class="fas fa-save me-2"></i>Save Request
                                        </button>
                                        <button class="btn btn-outline-success w-100" id="importCollection">
                                            <i class="fas fa-file-import me-2"></i>Import Collection
                                        </button>
                                    </div>
                                    <div id="collectionsList">
                                        <!-- Collections will be listed here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include COLLEGEALL_ROOT . '/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        class APITester {
            constructor() {
                this.history = JSON.parse(localStorage.getItem('apiHistory')) || [];
                this.collections = JSON.parse(localStorage.getItem('apiCollections')) || [];
                this.init();
            }

            init() {
                this.bindEvents();
                this.renderHistory();
                this.renderCollections();
                this.setupAuth();
            }

            bindEvents() {
                document.getElementById('sendRequest').addEventListener('click', () => this.sendRequest());
                document.getElementById('addHeader').addEventListener('click', () => this.addHeaderRow());
                document.getElementById('clearHistory').addEventListener('click', () => this.clearHistory());
                document.getElementById('saveToCollection').addEventListener('click', () => this.saveToCollection());
                document.getElementById('importCollection').addEventListener('click', () => this.importCollection());
                document.getElementById('authType').addEventListener('change', () => this.setupAuth());

                // Load sample request
                this.loadSampleRequest();
            }

            async sendRequest() {
                const url = document.getElementById('apiUrl').value;
                const method = document.getElementById('httpMethod').value;
                const body = document.getElementById('requestBody').value;
                const timeout = document.getElementById('timeout').value * 1000;

                if (!url) {
                    alert('Please enter a URL');
                    return;
                }

                const headers = this.getHeaders();
                const authHeaders = this.getAuthHeaders();

                const requestOptions = {
                    method: method,
                    headers: { ...headers, ...authHeaders },
                    timeout: timeout
                };

                if (method !== 'GET' && body) {
                    requestOptions.body = body;
                }

                const startTime = Date.now();

                try {
                    const controller = new AbortController();
                    const timeoutId = setTimeout(() => controller.abort(), timeout);

                    const response = await fetch(url, {
                        ...requestOptions,
                        signal: controller.signal
                    });

                    clearTimeout(timeoutId);

                    const endTime = Date.now();
                    const responseTime = endTime - startTime;
                    const responseText = await response.text();

                    this.displayResponse(response, responseText, responseTime);
                    this.saveToHistory({
                        url,
                        method,
                        body,
                        headers,
                        timestamp: new Date().toISOString(),
                        status: response.status,
                        responseTime
                    });

                } catch (error) {
                    this.displayError(error, Date.now() - startTime);
                }
            }

            getHeaders() {
                const headers = {};
                const headerRows = document.querySelectorAll('.header-row');
                
                headerRows.forEach(row => {
                    const nameInput = row.querySelector('input:first-child');
                    const valueInput = row.querySelector('input:last-child');
                    
                    if (nameInput.value && valueInput.value) {
                        headers[nameInput.value] = valueInput.value;
                    }
                });

                // Add content type header
                const contentType = document.getElementById('contentType').value;
                if (contentType) {
                    headers['Content-Type'] = contentType;
                }

                return headers;
            }

            getAuthHeaders() {
                const authType = document.getElementById('authType').value;
                const headers = {};

                switch (authType) {
                    case 'bearer':
                        const token = document.getElementById('bearerToken').value;
                        if (token) headers['Authorization'] = `Bearer ${token}`;
                        break;
                    case 'basic':
                        const username = document.getElementById('basicUsername').value;
                        const password = document.getElementById('basicPassword').value;
                        if (username && password) {
                            headers['Authorization'] = `Basic ${btoa(`${username}:${password}`)}`;
                        }
                        break;
                    case 'apiKey':
                        const keyName = document.getElementById('apiKeyName').value;
                        const keyValue = document.getElementById('apiKeyValue').value;
                        const keyLocation = document.getElementById('apiKeyLocation').value;
                        
                        if (keyName && keyValue) {
                            if (keyLocation === 'header') {
                                headers[keyName] = keyValue;
                            }
                        }
                        break;
                }

                return headers;
            }

            displayResponse(response, responseText, responseTime) {
                const responseArea = document.getElementById('responseText');
                const statusBadge = document.getElementById('responseStatus');
                const timeBadge = document.getElementById('responseTime');

                statusBadge.textContent = `Status: ${response.status} ${response.statusText}`;
                statusBadge.className = `badge ${response.ok ? 'bg-success' : 'bg-danger'}`;
                
                timeBadge.textContent = `Time: ${responseTime}ms`;

                try {
                    const formattedJson = JSON.stringify(JSON.parse(responseText), null, 2);
                    responseArea.textContent = formattedJson;
                } catch {
                    responseArea.textContent = responseText;
                }
            }

            displayError(error, responseTime) {
                const responseArea = document.getElementById('responseText');
                const statusBadge = document.getElementById('responseStatus');
                const timeBadge = document.getElementById('responseTime');

                statusBadge.textContent = 'Status: Error';
                statusBadge.className = 'badge bg-danger';
                timeBadge.textContent = `Time: ${responseTime}ms`;

                responseArea.textContent = error.message;
            }

            addHeaderRow() {
                const container = document.getElementById('headersContainer');
                const row = document.createElement('div');
                row.className = 'row header-row mb-2';
                row.innerHTML = `
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Header name">
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" placeholder="Header value">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-outline-danger w-100 remove-header">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                container.appendChild(row);

                row.querySelector('.remove-header').addEventListener('click', () => row.remove());
            }

            setupAuth() {
                const authType = document.getElementById('authType').value;
                const authFields = document.getElementById('authFields');
                
                let html = '';
                
                switch (authType) {
                    case 'bearer':
                        html = `
                            <div class="mb-3">
                                <label class="form-label">Bearer Token</label>
                                <input type="password" class="form-control" id="bearerToken" 
                                       placeholder="Enter your bearer token">
                            </div>
                        `;
                        break;
                    case 'basic':
                        html = `
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" id="basicUsername" 
                                       placeholder="Enter username">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="basicPassword" 
                                       placeholder="Enter password">
                            </div>
                        `;
                        break;
                    case 'apiKey':
                        html = `
                            <div class="mb-3">
                                <label class="form-label">Key Name</label>
                                <input type="text" class="form-control" id="apiKeyName" 
                                       placeholder="X-API-Key">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Key Value</label>
                                <input type="password" class="form-control" id="apiKeyValue" 
                                       placeholder="Enter API key">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <select class="form-select" id="apiKeyLocation">
                                    <option value="header">Header</option>
                                    <option value="query">Query Parameter</option>
                                </select>
                            </div>
                        `;
                        break;
                }
                
                authFields.innerHTML = html;
            }

            saveToHistory(request) {
                this.history.unshift(request);
                if (this.history.length > 50) {
                    this.history = this.history.slice(0, 50);
                }
                localStorage.setItem('apiHistory', JSON.stringify(this.history));
                this.renderHistory();
            }

            renderHistory() {
                const container = document.getElementById('requestHistory');
                container.innerHTML = '';

                this.history.forEach((item, index) => {
                    const div = document.createElement('div');
                    div.className = 'history-item';
                    div.innerHTML = `
                        <div class="d-flex justify-content-between">
                            <span class="method-${item.method.toLowerCase()} method-badge">${item.method}</span>
                            <small class="text-muted">${new Date(item.timestamp).toLocaleTimeString()}</small>
                        </div>
                        <div class="small text-truncate">${item.url}</div>
                        <div class="small text-muted">Status: ${item.status} • ${item.responseTime}ms</div>
                    `;
                    div.addEventListener('click', () => this.loadHistoryItem(item));
                    container.appendChild(div);
                });
            }

            loadHistoryItem(item) {
                document.getElementById('apiUrl').value = item.url;
                document.getElementById('httpMethod').value = item.method;
                document.getElementById('requestBody').value = item.body || '';
                
                // Clear existing headers
                document.querySelectorAll('.header-row').forEach(row => row.remove());
                
                // Add headers from history
                Object.entries(item.headers).forEach(([key, value]) => {
                    if (key !== 'Content-Type') {
                        this.addHeaderRow();
                        const rows = document.querySelectorAll('.header-row');
                        const lastRow = rows[rows.length - 1];
                        lastRow.querySelector('input:first-child').value = key;
                        lastRow.querySelector('input:last-child').value = value;
                    }
                });
            }

            clearHistory() {
                if (confirm('Are you sure you want to clear all history?')) {
                    this.history = [];
                    localStorage.removeItem('apiHistory');
                    this.renderHistory();
                }
            }

            saveToCollection() {
                const name = prompt('Enter collection name:');
                if (name) {
                    const request = {
                        name,
                        url: document.getElementById('apiUrl').value,
                        method: document.getElementById('httpMethod').value,
                        body: document.getElementById('requestBody').value,
                        headers: this.getHeaders(),
                        timestamp: new Date().toISOString()
                    };
                    
                    this.collections.push(request);
                    localStorage.setItem('apiCollections', JSON.stringify(this.collections));
                    this.renderCollections();
                }
            }

            renderCollections() {
                const container = document.getElementById('collectionsList');
                container.innerHTML = '';

                this.collections.forEach((collection, index) => {
                    const div = document.createElement('div');
                    div.className = 'history-item';
                    div.innerHTML = `
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>${collection.name}</strong>
                            <button class="btn btn-sm btn-outline-danger" onclick="apiTester.deleteCollection(${index})">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="small text-truncate">${collection.method} • ${collection.url}</div>
                    `;
                    div.addEventListener('click', () => this.loadCollection(collection));
                    container.appendChild(div);
                });
            }

            loadCollection(collection) {
                document.getElementById('apiUrl').value = collection.url;
                document.getElementById('httpMethod').value = collection.method;
                document.getElementById('requestBody').value = collection.body || '';
            }

            deleteCollection(index) {
                    this.collections.splice(index, 1);
                    localStorage.setItem('apiCollections', JSON.stringify(this.collections));
                    this.renderCollections();
            }

            importCollection() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = '.json';
                input.onchange = (e) => {
                    const file = e.target.files[0];
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        try {
                            const collections = JSON.parse(e.target.result);
                            this.collections = this.collections.concat(collections);
                            localStorage.setItem('apiCollections', JSON.stringify(this.collections));
                            this.renderCollections();
                            alert('Collection imported successfully!');
                        } catch (error) {
                            alert('Error importing collection: ' + error.message);
                        }
                    };
                    reader.readAsText(file);
                };
                input.click();
            }

            loadSampleRequest() {
                document.getElementById('apiUrl').value = '';
                document.getElementById('requestBody').value = JSON.stringify({
                    title: 'foo',
                    body: 'bar',
                    userId: 1
                }, null, 2);
            }
        }

        // Initialize API Tester
        const apiTester = new APITester();
    </script>
</body>
</html>