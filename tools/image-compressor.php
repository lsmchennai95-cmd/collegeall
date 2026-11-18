<?php require_once __DIR__ . '/../config/bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://api.collegeall.com/Logo/fav.png" type="image/png">
    <title>Image Compressor — Reduce Image Size Online (JPG, PNG, WebP) Fast</title>
    <meta name="description" content="Compress JPG, PNG, and WebP images online without losing quality. Upload multiple images, set quality, resize dimensions, choose output format, and download all compressed files instantly. Fast processing, drag-and-drop upload, and smart size savings.">
    <meta name="keywords" content="mage compressor, online image compressor, compress jpg, compress png, compress webp, reduce image size online, image resize and compress, batch image compressor, photo compressor online, image optimization tool, free image compressor">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset_url('/assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="../index.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #7209b7;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }

        .compressor-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 20px 0;
        }

        .upload-area {
            border: 3px dashed #4361ee;
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            background: #f8f9ff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            background: #eef2ff;
            transform: translateY(-2px);
        }

        .preview-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .compression-stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 25px;
        }

        .progress-ring {
            transform: rotate(-90deg);
        }

        .compression-options {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
        }

        #qualityRange {
            appearance: auto;
        }
    </style>
</head>
<body class="bg-light">
    <?php include COLLEGEALL_ROOT . '/header.php'; ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="compressor-container">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold text-primary">Advanced Image Compressor</h1>
                        <p class="lead text-muted">Compress images without losing quality</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="upload-area" id="dropZone">
                                <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                <h4>Drop images here or click to upload</h4>
                                <p class="text-muted">Supports JPG, PNG, WebP (Max 20MB)</p>
                                <input type="file" id="imageInput" accept="image/*" class="d-none" multiple>
                                <button class="btn btn-primary mt-3" onclick="document.getElementById('imageInput').click()">
                                    <i class="fas fa-folder-open me-2"></i>Choose Files
                                </button>
                            </div>

                            <div class="compression-options mt-4">
                                <h5 class="mb-4"><i class="fas fa-cog me-2"></i>Compression Settings</h5>
                                
                                <div class="mb-3">
                                    <label class="form-label">Quality: <span id="qualityValue">80</span>%</label>
                                    <input type="range" class="form-range" id="qualityRange" min="1" max="100" value="80">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label">Max Width (px)</label>
                                        <input type="number" class="form-control" id="maxWidth" value="1920" min="100">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Max Height (px)</label>
                                        <input type="number" class="form-control" id="maxHeight" value="1080" min="100">
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label class="form-label">Output Format</label>
                                    <select class="form-select" id="outputFormat">
                                        <option value="jpeg">JPEG</option>
                                        <option value="png">PNG</option>
                                        <option value="webp">WebP</option>
                                    </select>
                                </div>

                                <button class="btn btn-success w-100 mt-4" id="compressAllBtn">
                                    <i class="fas fa-compress-alt me-2"></i>Compress All Images
                                </button>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="imagePreviews" class="d-none">
                                <h5 class="mb-3"><i class="fas fa-images me-2"></i>Image Previews</h5>
                                <div id="previewsContainer" class="row g-3"></div>
                                
                                <div class="compression-stats mt-4">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <h3 id="totalOriginalSize">0 MB</h3>
                                            <small>Original Size</small>
                                        </div>
                                        <div class="col-4">
                                            <h3 id="totalCompressedSize">0 MB</h3>
                                            <small>Compressed Size</small>
                                        </div>
                                        <div class="col-4">
                                            <h3 id="totalSavings">0%</h3>
                                            <small>Savings</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-outline-primary w-100" id="downloadAllBtn">
                                        <i class="fas fa-download me-2"></i>Download All Compressed
                                    </button>
                                </div>
                            </div>

                            <div id="emptyState" class="text-center py-5">
                                <i class="fas fa-image fa-4x text-muted mb-3"></i>
                                <h5 class="text-muted">No images uploaded yet</h5>
                                <p class="text-muted">Upload images to start compression</p>
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
        let uploadedImages = [];

        const dropZone = document.getElementById('dropZone');
        const imageInput = document.getElementById('imageInput');
        const previewsContainer = document.getElementById('previewsContainer');
        const imagePreviews = document.getElementById('imagePreviews');
        const emptyState = document.getElementById('emptyState');

        // Drag and drop functionality
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            dropZone.style.background = '#e3f2fd';
            dropZone.style.borderColor = '#2196f3';
        }

        function unhighlight() {
            dropZone.style.background = '#f8f9ff';
            dropZone.style.borderColor = '#4361ee';
        }

        dropZone.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }

        imageInput.addEventListener('change', function() {
            handleFiles(this.files);
        });

        function handleFiles(files) {
            for (let file of files) {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        uploadedImages.push({
                            file: file,
                            url: e.target.result,
                            compressed: null
                        });
                        updatePreviews();
                    };
                    reader.readAsDataURL(file);
                }
            }
        }

        function updatePreviews() {
            if (uploadedImages.length > 0) {
                imagePreviews.classList.remove('d-none');
                emptyState.classList.add('d-none');
                
                previewsContainer.innerHTML = '';
                uploadedImages.forEach((img, index) => {
                    const col = document.createElement('div');
                    col.className = 'col-6';
                    col.innerHTML = `
                        <div class="preview-container">
                            <img src="${img.url}" class="img-fluid" alt="Preview">
                            <div class="position-absolute top-0 end-0 p-2">
                                <button class="btn btn-sm btn-danger" onclick="removeImage(${index})">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white p-2">
                                <small>${formatBytes(img.file.size)}</small>
                            </div>
                        </div>
                    `;
                    previewsContainer.appendChild(col);
                });
            } else {
                imagePreviews.classList.add('d-none');
                emptyState.classList.remove('d-none');
            }
        }

        function removeImage(index) {
            uploadedImages.splice(index, 1);
            updatePreviews();
        }

        function formatBytes(bytes, decimals = 2) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const dm = decimals < 0 ? 0 : decimals;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        }

        // Compression functionality
        document.getElementById('compressAllBtn').addEventListener('click', compressAllImages);

        async function compressAllImages() {
            const quality = document.getElementById('qualityRange').value / 100;
            const maxWidth = document.getElementById('maxWidth').value;
            const maxHeight = document.getElementById('maxHeight').value;
            const format = document.getElementById('outputFormat').value;

            for (let img of uploadedImages) {
                await compressImage(img, quality, maxWidth, maxHeight, format);
            }
            
            updateStats();
        }

        function compressImage(img, quality, maxWidth, maxHeight, format) {
            return new Promise((resolve) => {
                const image = new Image();
                image.onload = function() {
                    const canvas = document.createElement('canvas');
                    let width = image.width;
                    let height = image.height;

                    if (width > maxWidth) {
                        height = (maxWidth / width) * height;
                        width = maxWidth;
                    }
                    if (height > maxHeight) {
                        width = (maxHeight / height) * width;
                        height = maxHeight;
                    }

                    canvas.width = width;
                    canvas.height = height;

                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(image, 0, 0, width, height);

                    canvas.toBlob(function(blob) {
                        img.compressed = {
                            blob: blob,
                            url: URL.createObjectURL(blob)
                        };
                        resolve();
                    }, `image/${format}`, quality);
                };
                image.src = img.url;
            });
        }

        function updateStats() {
            let totalOriginal = 0;
            let totalCompressed = 0;

            uploadedImages.forEach(img => {
                totalOriginal += img.file.size;
                if (img.compressed) {
                    totalCompressed += img.compressed.blob.size;
                }
            });

            const savings = ((totalOriginal - totalCompressed) / totalOriginal * 100).toFixed(1);

            document.getElementById('totalOriginalSize').textContent = formatBytes(totalOriginal);
            document.getElementById('totalCompressedSize').textContent = formatBytes(totalCompressed);
            document.getElementById('totalSavings').textContent = savings + '%';
        }

        document.getElementById('qualityRange').addEventListener('input', function() {
            document.getElementById('qualityValue').textContent = this.value;
        });

        document.getElementById('downloadAllBtn').addEventListener('click', function() {
            uploadedImages.forEach((img, index) => {
                if (img.compressed) {
                    const link = document.createElement('a');
                    link.download = `compressed-${index + 1}.${document.getElementById('outputFormat').value}`;
                    link.href = img.compressed.url;
                    link.click();
                }
            });
        });
    </script>
</body>
</html>