<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Sticker Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8b5cf6;
            --secondary-color: #7c3aed;
        }

        .sticker-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 20px 0;
        }

        .editor-area {
            border: 3px dashed #e2e8f0;
            border-radius: 15px;
            padding: 20px;
            background: #f8fafc;
            min-height: 500px;
        }

        .tool-panel {
            background: #f1f5f9;
            border-radius: 15px;
            padding: 20px;
            height: 100%;
        }

        .sticker-preview {
            width: 300px;
            height: 300px;
            margin: 0 auto;
            border: 2px solid #e2e8f0;
            border-radius: 20px;
            overflow: hidden;
            background: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .tool-btn {
            width: 50px;
            height: 50px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
        }

        .tool-btn:hover, .tool-btn.active {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        .color-picker {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            cursor: pointer;
        }

        .text-tool {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .filter-option {
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .filter-option:hover {
            transform: scale(1.05);
        }

        .canvas-container {
            position: relative;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="sticker-container">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold" style="color: var(--primary-color);">Advanced Sticker Maker</h1>
                        <p class="lead text-muted">Create stunning stickers from images with advanced editing tools</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-9">
                            <div class="editor-area">
                                <div class="row h-100">
                                    <div class="col-md-8">
                                        <div class="canvas-container">
                                            <canvas id="stickerCanvas" width="800" height="600"></canvas>
                                            <div id="canvasOverlay" style="position: absolute; top: 0; left: 0; pointer-events: none;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="tool-panel">
                                            <h5 class="mb-4"><i class="fas fa-sliders-h me-2"></i>Tools</h5>
                                            
                                            <div class="row g-2 mb-4">
                                                <div class="col-4">
                                                    <div class="tool-btn active" data-tool="select">
                                                        <i class="fas fa-mouse-pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tool-btn" data-tool="crop">
                                                        <i class="fas fa-crop-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tool-btn" data-tool="brush">
                                                        <i class="fas fa-paint-brush"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tool-btn" data-tool="text">
                                                        <i class="fas fa-font"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tool-btn" data-tool="shape">
                                                        <i class="fas fa-shapes"></i>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="tool-btn" data-tool="eraser">
                                                        <i class="fas fa-eraser"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Brush Size</label>
                                                <input type="range" class="form-range" id="brushSize" min="1" max="50" value="10">
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Colors</label>
                                                <div class="d-flex flex-wrap gap-2" id="colorPalette">
                                                    <!-- Colors will be added dynamically -->
                                                </div>
                                                <input type="color" class="form-control form-control-color mt-2" id="customColor" value="#8b5cf6">
                                            </div>

                                            <div class="text-tool mb-4 d-none" id="textTool">
                                                <input type="text" class="form-control mb-2" id="textInput" placeholder="Enter text">
                                                <select class="form-select mb-2" id="fontFamily">
                                                    <option value="Arial">Arial</option>
                                                    <option value="Comic Sans MS">Comic Sans</option>
                                                    <option value="Courier New">Courier New</option>
                                                    <option value="Georgia">Georgia</option>
                                                </select>
                                                <input type="range" class="form-range" id="fontSize" min="10" max="100" value="30">
                                            </div>

                                            <button class="btn btn-primary w-100 mb-2" id="addImageBtn">
                                                <i class="fas fa-image me-2"></i>Add Image
                                            </button>
                                            <button class="btn btn-outline-primary w-100 mb-2" id="addShapeBtn">
                                                <i class="fas fa-shapes me-2"></i>Add Shape
                                            </button>
                                            <button class="btn btn-success w-100" id="exportBtn">
                                                <i class="fas fa-download me-2"></i>Export Sticker
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="sticker-preview mb-4">
                                <img id="stickerOutput" src="" alt="Sticker Preview" class="img-fluid w-100 h-100" style="object-fit: contain;">
                            </div>

                            <div class="card mb-4">
                                <div class="card-header bg-white">
                                    <h6 class="mb-0"><i class="fas fa-magic me-2"></i>Filters & Effects</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-2" id="filtersContainer">
                                        <!-- Filters will be added dynamically -->
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white">
                                    <h6 class="mb-0"><i class="fas fa-layer-group me-2"></i>Layers</h6>
                                </div>
                                <div class="card-body">
                                    <div id="layersList">
                                        <!-- Layers will be listed here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        class StickerMaker {
            constructor() {
                this.canvas = document.getElementById('stickerCanvas');
                this.ctx = this.canvas.getContext('2d');
                this.currentTool = 'select';
                this.isDrawing = false;
                this.lastX = 0;
                this.lastY = 0;
                this.layers = [];
                this.activeLayer = null;
                this.currentColor = '#8b5cf6';
                this.brushSize = 10;
                this.init();
            }

            init() {
                this.setupCanvas();
                this.bindEvents();
                this.setupColorPalette();
                this.setupFilters();
                this.createNewLayer();
            }

            setupCanvas() {
                // Set canvas background to transparent
                this.ctx.fillStyle = 'transparent';
                this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
            }

            bindEvents() {
                // Tool selection
                document.querySelectorAll('.tool-btn').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        document.querySelectorAll('.tool-btn').forEach(b => b.classList.remove('active'));
                        e.currentTarget.classList.add('active');
                        this.currentTool = e.currentTarget.dataset.tool;
                        this.toggleToolOptions();
                    });
                });

                // Canvas events
                this.canvas.addEventListener('mousedown', (e) => this.startDrawing(e));
                this.canvas.addEventListener('mousemove', (e) => this.draw(e));
                this.canvas.addEventListener('mouseup', () => this.stopDrawing());
                this.canvas.addEventListener('mouseout', () => this.stopDrawing());

                // Brush size
                document.getElementById('brushSize').addEventListener('input', (e) => {
                    this.brushSize = e.target.value;
                });

                // Color selection
                document.getElementById('customColor').addEventListener('input', (e) => {
                    this.currentColor = e.target.value;
                });

                // Add image
                document.getElementById('addImageBtn').addEventListener('click', () => {
                    this.uploadImage();
                });

                // Export sticker
                document.getElementById('exportBtn').addEventListener('click', () => {
                    this.exportSticker();
                });

                // Add shape
                document.getElementById('addShapeBtn').addEventListener('click', () => {
                    this.addShape();
                });
            }

            setupColorPalette() {
                const palette = document.getElementById('colorPalette');
                const colors = [
                    '#8b5cf6', '#ef4444', '#f59e0b', '#10b981', '#3b82f6',
                    '#ec4899', '#000000', '#ffffff', '#64748b', '#f97316'
                ];

                colors.forEach(color => {
                    const colorDiv = document.createElement('div');
                    colorDiv.className = 'color-picker';
                    colorDiv.style.backgroundColor = color;
                    colorDiv.addEventListener('click', () => {
                        this.currentColor = color;
                        document.getElementById('customColor').value = color;
                    });
                    palette.appendChild(colorDiv);
                });
            }

            setupFilters() {
                const filtersContainer = document.getElementById('filtersContainer');
                const filters = [
                    { name: 'None', filter: 'none' },
                    { name: 'Grayscale', filter: 'grayscale(100%)' },
                    { name: 'Sepia', filter: 'sepia(100%)' },
                    { name: 'Invert', filter: 'invert(100%)' },
                    { name: 'Brightness', filter: 'brightness(150%)' },
                    { name: 'Contrast', filter: 'contrast(200%)' },
                    { name: 'Saturate', filter: 'saturate(200%)' },
                    { name: 'Hue Rotate', filter: 'hue-rotate(90deg)' },
                    { name: 'Blur', filter: 'blur(2px)' }
                ];

                filters.forEach(filter => {
                    const col = document.createElement('div');
                    col.className = 'col-6';
                    col.innerHTML = `
                        <div class="filter-option text-center p-2 bg-white rounded">
                            <div class="filter-preview mb-2" style="width: 100%; height: 40px; background: linear-gradient(45deg, #8b5cf6, #ec4899); filter: ${filter.filter}"></div>
                            <small class="text-muted">${filter.name}</small>
                        </div>
                    `;
                    col.addEventListener('click', () => this.applyFilter(filter.filter));
                    filtersContainer.appendChild(col);
                });
            }

            toggleToolOptions() {
                const textTool = document.getElementById('textTool');
                if (this.currentTool === 'text') {
                    textTool.classList.remove('d-none');
                } else {
                    textTool.classList.add('d-none');
                }
            }

            startDrawing(e) {
                this.isDrawing = true;
                const rect = this.canvas.getBoundingClientRect();
                this.lastX = e.clientX - rect.left;
                this.lastY = e.clientY - rect.top;

                if (this.currentTool === 'text') {
                    this.addText();
                }
            }

            draw(e) {
                if (!this.isDrawing) return;

                const rect = this.canvas.getBoundingClientRect();
                const currentX = e.clientX - rect.left;
                const currentY = e.clientY - rect.top;

                this.ctx.lineJoin = 'round';
                this.ctx.lineCap = 'round';
                this.ctx.lineWidth = this.brushSize;
                this.ctx.strokeStyle = this.currentColor;

                if (this.currentTool === 'brush') {
                    this.ctx.globalCompositeOperation = 'source-over';
                    this.ctx.beginPath();
                    this.ctx.moveTo(this.lastX, this.lastY);
                    this.ctx.lineTo(currentX, currentY);
                    this.ctx.stroke();
                } else if (this.currentTool === 'eraser') {
                    this.ctx.globalCompositeOperation = 'destination-out';
                    this.ctx.beginPath();
                    this.ctx.moveTo(this.lastX, this.lastY);
                    this.ctx.lineTo(currentX, currentY);
                    this.ctx.stroke();
                }

                this.lastX = currentX;
                this.lastY = currentY;
                this.updatePreview();
            }

            stopDrawing() {
                this.isDrawing = false;
                this.ctx.beginPath();
            }

            addText() {
                const text = document.getElementById('textInput').value;
                const fontFamily = document.getElementById('fontFamily').value;
                const fontSize = document.getElementById('fontSize').value;

                if (text) {
                    this.ctx.font = `${fontSize}px ${fontFamily}`;
                    this.ctx.fillStyle = this.currentColor;
                    this.ctx.textAlign = 'left';
                    this.ctx.textBaseline = 'top';
                    this.ctx.fillText(text, this.lastX, this.lastY);
                    this.updatePreview();
                }
            }

            addShape() {
                const shapes = ['circle', 'rectangle', 'triangle', 'star'];
                const shape = shapes[Math.floor(Math.random() * shapes.length)];
                
                this.ctx.fillStyle = this.currentColor;
                
                switch (shape) {
                    case 'circle':
                        this.ctx.beginPath();
                        this.ctx.arc(200, 200, 50, 0, Math.PI * 2);
                        this.ctx.fill();
                        break;
                    case 'rectangle':
                        this.ctx.fillRect(150, 150, 100, 100);
                        break;
                    case 'triangle':
                        this.ctx.beginPath();
                        this.ctx.moveTo(200, 150);
                        this.ctx.lineTo(150, 250);
                        this.ctx.lineTo(250, 250);
                        this.ctx.closePath();
                        this.ctx.fill();
                        break;
                    case 'star':
                        this.drawStar(200, 200, 5, 50, 20);
                        this.ctx.fill();
                        break;
                }
                
                this.updatePreview();
            }

            drawStar(cx, cy, spikes, outerRadius, innerRadius) {
                let rot = Math.PI / 2 * 3;
                let x = cx;
                let y = cy;
                let step = Math.PI / spikes;

                this.ctx.beginPath();
                this.ctx.moveTo(cx, cy - outerRadius);

                for (let i = 0; i < spikes; i++) {
                    x = cx + Math.cos(rot) * outerRadius;
                    y = cy + Math.sin(rot) * outerRadius;
                    this.ctx.lineTo(x, y);
                    rot += step;

                    x = cx + Math.cos(rot) * innerRadius;
                    y = cy + Math.sin(rot) * innerRadius;
                    this.ctx.lineTo(x, y);
                    rot += step;
                }

                this.ctx.lineTo(cx, cy - outerRadius);
                this.ctx.closePath();
            }

            uploadImage() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = (e) => {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (event) => {
                            const img = new Image();
                            img.onload = () => {
                                // Draw image on canvas
                                this.ctx.drawImage(img, 0, 0, this.canvas.width, this.canvas.height);
                                this.updatePreview();
                            };
                            img.src = event.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                };
                input.click();
            }

            applyFilter(filter) {
                this.canvas.style.filter = filter;
                this.updatePreview();
            }

            updatePreview() {
                const output = document.getElementById('stickerOutput');
                output.src = this.canvas.toDataURL('image/png');
            }

            createNewLayer() {
                const layer = {
                    id: Date.now(),
                    name: `Layer ${this.layers.length + 1}`,
                    visible: true,
                    locked: false
                };
                this.layers.push(layer);
                this.activeLayer = layer;
                this.updateLayersList();
            }

            updateLayersList() {
                const list = document.getElementById('layersList');
                list.innerHTML = '';

                this.layers.forEach(layer => {
                    const div = document.createElement('div');
                    div.className = `d-flex justify-content-between align-items-center p-2 border-bottom ${layer === this.activeLayer ? 'bg-light' : ''}`;
                    div.innerHTML = `
                        <div>
                            <i class="fas fa-layer-group me-2 text-muted"></i>
                            <span>${layer.name}</span>
                        </div>
                        <div>
                            <button class="btn btn-sm ${layer.visible ? 'btn-outline-success' : 'btn-outline-secondary'} me-1">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm ${layer.locked ? 'btn-outline-warning' : 'btn-outline-secondary'}">
                                <i class="fas fa-lock"></i>
                            </button>
                        </div>
                    `;
                    list.appendChild(div);
                });
            }

            exportSticker() {
                const link = document.createElement('a');
                link.download = 'sticker.png';
                link.href = this.canvas.toDataURL('image/png');
                link.click();
            }
        }

        // Initialize Sticker Maker
        const stickerMaker = new StickerMaker();
    </script>
</body>
</html>