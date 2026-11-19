<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advanced Pixel Art Drawer</title>
    <meta name="description" content="Free online pixel art drawer and retro sprite creator. Design, paint, and download pixel artwork with customizable grid sizes and palettes.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://collegeall.com/tools/pixel-art.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CollegeAll">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Advanced Pixel Art Drawer">
    <meta property="og:description" content="Free online pixel art drawer and retro sprite creator. Design, paint, and download pixel artwork with customizable grid sizes and palettes.">
    <meta property="og:url" content="https://collegeall.com/tools/pixel-art.php">
    <meta property="og:image" content="https://api.collegeall.com/Logo/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@CollegeAll">
    <meta name="twitter:title" content="Advanced Pixel Art Drawer">
    <meta name="twitter:description" content="Free online pixel art drawer and retro sprite creator. Design, paint, and download pixel artwork with customizable grid sizes and palettes.">
    <meta name="twitter:image" content="https://api.collegeall.com/Logo/og-image.png">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Advanced Pixel Art Drawer",
      "description": "Free online pixel art drawer and retro sprite creator. Design, paint, and download pixel artwork with customizable grid sizes and palettes.",
      "url": "https://collegeall.com/tools/pixel-art.php",
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
    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    <script>        // gif.worker.js 0.2.0 - https://github.com/jnordberg/gif.js(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){var NeuQuant=require("./TypedNeuQuant.js");var LZWEncoder=require("./LZWEncoder.js");function ByteArray(){this.page=-1;this.pages=[];this.newPage()}ByteArray.pageSize=4096;ByteArray.charMap={};for(var i=0;i<256;i++)ByteArray.charMap[i]=String.fromCharCode(i);ByteArray.prototype.newPage=function(){this.pages[++this.page]=new Uint8Array(ByteArray.pageSize);this.cursor=0};ByteArray.prototype.getData=function(){var rv="";for(var p=0;p<this.pages.length;p++){for(var i=0;i<ByteArray.pageSize;i++){rv+=ByteArray.charMap[this.pages[p][i]]}}return rv};ByteArray.prototype.writeByte=function(val){if(this.cursor>=ByteArray.pageSize)this.newPage();this.pages[this.page][this.cursor++]=val};ByteArray.prototype.writeUTFBytes=function(string){for(var l=string.length,i=0;i<l;i++)this.writeByte(string.charCodeAt(i))};ByteArray.prototype.writeBytes=function(array,offset,length){for(var l=length||array.length,i=offset||0;i<l;i++)this.writeByte(array[i])};function GIFEncoder(width,height){this.width=~~width;this.height=~~height;this.transparent=null;this.transIndex=0;this.repeat=-1;this.delay=0;this.image=null;this.pixels=null;this.indexedPixels=null;this.colorDepth=null;this.colorTab=null;this.neuQuant=null;this.usedEntry=new Array;this.palSize=7;this.dispose=-1;this.firstFrame=true;this.sample=10;this.dither=false;this.globalPalette=false;this.out=new ByteArray}GIFEncoder.prototype.setDelay=function(milliseconds){this.delay=Math.round(milliseconds/10)};GIFEncoder.prototype.setFrameRate=function(fps){this.delay=Math.round(100/fps)};GIFEncoder.prototype.setDispose=function(disposalCode){if(disposalCode>=0)this.dispose=disposalCode};GIFEncoder.prototype.setRepeat=function(repeat){this.repeat=repeat};GIFEncoder.prototype.setTransparent=function(color){this.transparent=color};GIFEncoder.prototype.addFrame=function(imageData){this.image=imageData;this.colorTab=this.globalPalette&&this.globalPalette.slice?this.globalPalette:null;this.getImagePixels();this.analyzePixels();if(this.globalPalette===true)this.globalPalette=this.colorTab;if(this.firstFrame){this.writeLSD();this.writePalette();if(this.repeat>=0){this.writeNetscapeExt()}}this.writeGraphicCtrlExt();this.writeImageDesc();if(!this.firstFrame&&!this.globalPalette)this.writePalette();this.writePixels();this.firstFrame=false};GIFEncoder.prototype.finish=function(){this.out.writeByte(59)};GIFEncoder.prototype.setQuality=function(quality){if(quality<1)quality=1;this.sample=quality};GIFEncoder.prototype.setDither=function(dither){if(dither===true)dither="FloydSteinberg";this.dither=dither};GIFEncoder.prototype.setGlobalPalette=function(palette){this.globalPalette=palette};GIFEncoder.prototype.getGlobalPalette=function(){return this.globalPalette&&this.globalPalette.slice&&this.globalPalette.slice(0)||this.globalPalette};GIFEncoder.prototype.writeHeader=function(){this.out.writeUTFBytes("GIF89a")};GIFEncoder.prototype.analyzePixels=function(){if(!this.colorTab){this.neuQuant=new NeuQuant(this.pixels,this.sample);this.neuQuant.buildColormap();this.colorTab=this.neuQuant.getColormap()}if(this.dither){this.ditherPixels(this.dither.replace("-serpentine",""),this.dither.match(/-serpentine/)!==null)}else{this.indexPixels()}this.pixels=null;this.colorDepth=8;this.palSize=7;if(this.transparent!==null){this.transIndex=this.findClosest(this.transparent,true)}};GIFEncoder.prototype.indexPixels=function(imgq){var nPix=this.pixels.length/3;this.indexedPixels=new Uint8Array(nPix);var k=0;for(var j=0;j<nPix;j++){var index=this.findClosestRGB(this.pixels[k++]&255,this.pixels[k++]&255,this.pixels[k++]&255);this.usedEntry[index]=true;this.indexedPixels[j]=index}};GIFEncoder.prototype.ditherPixels=function(kernel,serpentine){var kernels={FalseFloydSteinberg:[[3/8,1,0],[3/8,0,1],[2/8,1,1]],FloydSteinberg:[[7/16,1,0],[3/16,-1,1],[5/16,0,1],[1/16,1,1]],Stucki:[[8/42,1,0],[4/42,2,0],[2/42,-2,1],[4/42,-1,1],[8/42,0,1],[4/42,1,1],[2/42,2,1],[1/42,-2,2],[2/42,-1,2],[4/42,0,2],[2/42,1,2],[1/42,2,2]],Atkinson:[[1/8,1,0],[1/8,2,0],[1/8,-1,1],[1/8,0,1],[1/8,1,1],[1/8,0,2]]};if(!kernel||!kernels[kernel]){throw"Unknown dithering kernel: "+kernel}var ds=kernels[kernel];var index=0,height=this.height,width=this.width,data=this.pixels;var direction=serpentine?-1:1;this.indexedPixels=new Uint8Array(this.pixels.length/3);for(var y=0;y<height;y++){if(serpentine)direction=direction*-1;for(var x=direction==1?0:width-1,xend=direction==1?width:0;x!==xend;x+=direction){index=y*width+x;var idx=index*3;var r1=data[idx];var g1=data[idx+1];var b1=data[idx+2];idx=this.findClosestRGB(r1,g1,b1);this.usedEntry[idx]=true;this.indexedPixels[index]=idx;idx*=3;var r2=this.colorTab[idx];var g2=this.colorTab[idx+1];var b2=this.colorTab[idx+2];var er=r1-r2;var eg=g1-g2;var eb=b1-b2;for(var i=direction==1?0:ds.length-1,end=direction==1?ds.length:0;i!==end;i+=direction){var x1=ds[i][1];var y1=ds[i][2];if(x1+x>=0&&x1+x<width&&y1+y>=0&&y1+y<height){var d=ds[i][0];idx=index+x1+y1*width;idx*=3;data[idx]=Math.max(0,Math.min(255,data[idx]+er*d));data[idx+1]=Math.max(0,Math.min(255,data[idx+1]+eg*d));data[idx+2]=Math.max(0,Math.min(255,data[idx+2]+eb*d))}}}}};GIFEncoder.prototype.findClosest=function(c,used){return this.findClosestRGB((c&16711680)>>16,(c&65280)>>8,c&255,used)};GIFEncoder.prototype.findClosestRGB=function(r,g,b,used){if(this.colorTab===null)return-1;if(this.neuQuant&&!used){return this.neuQuant.lookupRGB(r,g,b)}var c=b|g<<8|r<<16;var minpos=0;var dmin=256*256*256;var len=this.colorTab.length;for(var i=0,index=0;i<len;index++){var dr=r-(this.colorTab[i++]&255);var dg=g-(this.colorTab[i++]&255);var db=b-(this.colorTab[i++]&255);var d=dr*dr+dg*dg+db*db;if((!used||this.usedEntry[index])&&d<dmin){dmin=d;minpos=index}}return minpos};GIFEncoder.prototype.getImagePixels=function(){var w=this.width;var h=this.height;this.pixels=new Uint8Array(w*h*3);var data=this.image;var srcPos=0;var count=0;for(var i=0;i<h;i++){for(var j=0;j<w;j++){this.pixels[count++]=data[srcPos++];this.pixels[count++]=data[srcPos++];this.pixels[count++]=data[srcPos++];srcPos++}}};GIFEncoder.prototype.writeGraphicCtrlExt=function(){this.out.writeByte(33);this.out.writeByte(249);this.out.writeByte(4);var transp,disp;if(this.transparent===null){transp=0;disp=0}else{transp=1;disp=2}if(this.dispose>=0){disp=dispose&7}disp<<=2;this.out.writeByte(0|disp|0|transp);this.writeShort(this.delay);this.out.writeByte(this.transIndex);this.out.writeByte(0)};GIFEncoder.prototype.writeImageDesc=function(){this.out.writeByte(44);this.writeShort(0);this.writeShort(0);this.writeShort(this.width);this.writeShort(this.height);if(this.firstFrame||this.globalPalette){this.out.writeByte(0)}else{this.out.writeByte(128|0|0|0|this.palSize)}};GIFEncoder.prototype.writeLSD=function(){this.writeShort(this.width);this.writeShort(this.height);this.out.writeByte(128|112|0|this.palSize);this.out.writeByte(0);this.out.writeByte(0)};GIFEncoder.prototype.writeNetscapeExt=function(){this.out.writeByte(33);this.out.writeByte(255);this.out.writeByte(11);this.out.writeUTFBytes("NETSCAPE2.0");this.out.writeByte(3);this.out.writeByte(1);this.writeShort(this.repeat);this.out.writeByte(0)};GIFEncoder.prototype.writePalette=function(){this.out.writeBytes(this.colorTab);var n=3*256-this.colorTab.length;for(var i=0;i<n;i++)this.out.writeByte(0)};GIFEncoder.prototype.writeShort=function(pValue){this.out.writeByte(pValue&255);this.out.writeByte(pValue>>8&255)};GIFEncoder.prototype.writePixels=function(){var enc=new LZWEncoder(this.width,this.height,this.indexedPixels,this.colorDepth);enc.encode(this.out)};GIFEncoder.prototype.stream=function(){return this.out};module.exports=GIFEncoder},{"./LZWEncoder.js":2,"./TypedNeuQuant.js":3}],2:[function(require,module,exports){var EOF=-1;var BITS=12;var HSIZE=5003;var masks=[0,1,3,7,15,31,63,127,255,511,1023,2047,4095,8191,16383,32767,65535];function LZWEncoder(width,height,pixels,colorDepth){var initCodeSize=Math.max(2,colorDepth);var accum=new Uint8Array(256);var htab=new Int32Array(HSIZE);var codetab=new Int32Array(HSIZE);var cur_accum,cur_bits=0;var a_count;var free_ent=0;var maxcode;var clear_flg=false;var g_init_bits,ClearCode,EOFCode;function char_out(c,outs){accum[a_count++]=c;if(a_count>=254)flush_char(outs)}function cl_block(outs){cl_hash(HSIZE);free_ent=ClearCode+2;clear_flg=true;output(ClearCode,outs)}function cl_hash(hsize){for(var i=0;i<hsize;++i)htab[i]=-1}function compress(init_bits,outs){var fcode,c,i,ent,disp,hsize_reg,hshift;g_init_bits=init_bits;clear_flg=false;n_bits=g_init_bits;maxcode=MAXCODE(n_bits);ClearCode=1<<init_bits-1;EOFCode=ClearCode+1;free_ent=ClearCode+2;a_count=0;ent=nextPixel();hshift=0;for(fcode=HSIZE;fcode<65536;fcode*=2)++hshift;hshift=8-hshift;hsize_reg=HSIZE;cl_hash(hsize_reg);output(ClearCode,outs);outer_loop:while((c=nextPixel())!=EOF){fcode=(c<<BITS)+ent;i=c<<hshift^ent;if(htab[i]===fcode){ent=codetab[i];continue}else if(htab[i]>=0){disp=hsize_reg-i;if(i===0)disp=1;do{if((i-=disp)<0)i+=hsize_reg;if(htab[i]===fcode){ent=codetab[i];continue outer_loop}}while(htab[i]>=0)}output(ent,outs);ent=c;if(free_ent<1<<BITS){codetab[i]=free_ent++;htab[i]=fcode}else{cl_block(outs)}}output(ent,outs);output(EOFCode,outs)}function encode(outs){outs.writeByte(initCodeSize);remaining=width*height;curPixel=0;compress(initCodeSize+1,outs);outs.writeByte(0)}function flush_char(outs){if(a_count>0){outs.writeByte(a_count);outs.writeBytes(accum,0,a_count);a_count=0}}function MAXCODE(n_bits){return(1<<n_bits)-1}function nextPixel(){if(remaining===0)return EOF;--remaining;var pix=pixels[curPixel++];return pix&255}function output(code,outs){cur_accum&=masks[cur_bits];if(cur_bits>0)cur_accum|=code<<cur_bits;else cur_accum=code;cur_bits+=n_bits;while(cur_bits>=8){char_out(cur_accum&255,outs);cur_accum>>=8;cur_bits-=8}if(free_ent>maxcode||clear_flg){if(clear_flg){maxcode=MAXCODE(n_bits=g_init_bits);clear_flg=false}else{++n_bits;if(n_bits==BITS)maxcode=1<<BITS;else maxcode=MAXCODE(n_bits)}}if(code==EOFCode){while(cur_bits>0){char_out(cur_accum&255,outs);cur_accum>>=8;cur_bits-=8}flush_char(outs)}}this.encode=encode}module.exports=LZWEncoder},{}],3:[function(require,module,exports){var ncycles=100;var netsize=256;var maxnetpos=netsize-1;var netbiasshift=4;var intbiasshift=16;var intbias=1<<intbiasshift;var gammashift=10;var gamma=1<<gammashift;var betashift=10;var beta=intbias>>betashift;var betagamma=intbias<<gammashift-betashift;var initrad=netsize>>3;var radiusbiasshift=6;var radiusbias=1<<radiusbiasshift;var initradius=initrad*radiusbias;var radiusdec=30;var alphabiasshift=10;var initalpha=1<<alphabiasshift;var alphadec;var radbiasshift=8;var radbias=1<<radbiasshift;var alpharadbshift=alphabiasshift+radbiasshift;var alpharadbias=1<<alpharadbshift;var prime1=499;var prime2=491;var prime3=487;var prime4=503;var minpicturebytes=3*prime4;function NeuQuant(pixels,samplefac){var network;var netindex;var bias;var freq;var radpower;function init(){network=[];netindex=new Int32Array(256);bias=new Int32Array(netsize);freq=new Int32Array(netsize);radpower=new Int32Array(netsize>>3);var i,v;for(i=0;i<netsize;i++){v=(i<<netbiasshift+8)/netsize;network[i]=new Float64Array([v,v,v,0]);freq[i]=intbias/netsize;bias[i]=0}}function unbiasnet(){for(var i=0;i<netsize;i++){network[i][0]>>=netbiasshift;network[i][1]>>=netbiasshift;network[i][2]>>=netbiasshift;network[i][3]=i}}function altersingle(alpha,i,b,g,r){network[i][0]-=alpha*(network[i][0]-b)/initalpha;network[i][1]-=alpha*(network[i][1]-g)/initalpha;network[i][2]-=alpha*(network[i][2]-r)/initalpha}function alterneigh(radius,i,b,g,r){var lo=Math.abs(i-radius);var hi=Math.min(i+radius,netsize);var j=i+1;var k=i-1;var m=1;var p,a;while(j<hi||k>lo){a=radpower[m++];if(j<hi){p=network[j++];p[0]-=a*(p[0]-b)/alpharadbias;p[1]-=a*(p[1]-g)/alpharadbias;p[2]-=a*(p[2]-r)/alpharadbias}if(k>lo){p=network[k--];p[0]-=a*(p[0]-b)/alpharadbias;p[1]-=a*(p[1]-g)/alpharadbias;p[2]-=a*(p[2]-r)/alpharadbias}}}function contest(b,g,r){var bestd=~(1<<31);var bestbiasd=bestd;var bestpos=-1;var bestbiaspos=bestpos;var i,n,dist,biasdist,betafreq;for(i=0;i<netsize;i++){n=network[i];dist=Math.abs(n[0]-b)+Math.abs(n[1]-g)+Math.abs(n[2]-r);if(dist<bestd){bestd=dist;bestpos=i}biasdist=dist-(bias[i]>>intbiasshift-netbiasshift);if(biasdist<bestbiasd){bestbiasd=biasdist;bestbiaspos=i}betafreq=freq[i]>>betashift;freq[i]-=betafreq;bias[i]+=betafreq<<gammashift}freq[bestpos]+=beta;bias[bestpos]-=betagamma;return bestbiaspos}function inxbuild(){var i,j,p,q,smallpos,smallval,previouscol=0,startpos=0;for(i=0;i<netsize;i++){p=network[i];smallpos=i;smallval=p[1];for(j=i+1;j<netsize;j++){q=network[j];if(q[1]<smallval){smallpos=j;smallval=q[1]}}q=network[smallpos];if(i!=smallpos){j=q[0];q[0]=p[0];p[0]=j;j=q[1];q[1]=p[1];p[1]=j;j=q[2];q[2]=p[2];p[2]=j;j=q[3];q[3]=p[3];p[3]=j}if(smallval!=previouscol){netindex[previouscol]=startpos+i>>1;for(j=previouscol+1;j<smallval;j++)netindex[j]=i;previouscol=smallval;startpos=i}}netindex[previouscol]=startpos+maxnetpos>>1;for(j=previouscol+1;j<256;j++)netindex[j]=maxnetpos}function inxsearch(b,g,r){var a,p,dist;var bestd=1e3;var best=-1;var i=netindex[g];var j=i-1;while(i<netsize||j>=0){if(i<netsize){p=network[i];dist=p[1]-g;if(dist>=bestd)i=netsize;else{i++;if(dist<0)dist=-dist;a=p[0]-b;if(a<0)a=-a;dist+=a;if(dist<bestd){a=p[2]-r;if(a<0)a=-a;dist+=a;if(dist<bestd){bestd=dist;best=p[3]}}}}if(j>=0){p=network[j];dist=g-p[1];if(dist>=bestd)j=-1;else{j--;if(dist<0)dist=-dist;a=p[0]-b;if(a<0)a=-a;dist+=a;if(dist<bestd){a=p[2]-r;if(a<0)a=-a;dist+=a;if(dist<bestd){bestd=dist;best=p[3]}}}}}return best}function learn(){var i;var lengthcount=pixels.length;var alphadec=30+(samplefac-1)/3;var samplepixels=lengthcount/(3*samplefac);var delta=~~(samplepixels/ncycles);var alpha=initalpha;var radius=initradius;var rad=radius>>radiusbiasshift;if(rad<=1)rad=0;for(i=0;i<rad;i++)radpower[i]=alpha*((rad*rad-i*i)*radbias/(rad*rad));var step;if(lengthcount<minpicturebytes){samplefac=1;step=3}else if(lengthcount%prime1!==0){step=3*prime1}else if(lengthcount%prime2!==0){step=3*prime2}else if(lengthcount%prime3!==0){step=3*prime3}else{step=3*prime4}var b,g,r,j;var pix=0;i=0;while(i<samplepixels){b=(pixels[pix]&255)<<netbiasshift;g=(pixels[pix+1]&255)<<netbiasshift;r=(pixels[pix+2]&255)<<netbiasshift;j=contest(b,g,r);altersingle(alpha,j,b,g,r);if(rad!==0)alterneigh(rad,j,b,g,r);pix+=step;if(pix>=lengthcount)pix-=lengthcount;i++;if(delta===0)delta=1;if(i%delta===0){alpha-=alpha/alphadec;radius-=radius/radiusdec;rad=radius>>radiusbiasshift;if(rad<=1)rad=0;for(j=0;j<rad;j++)radpower[j]=alpha*((rad*rad-j*j)*radbias/(rad*rad))}}}function buildColormap(){init();learn();unbiasnet();inxbuild()}this.buildColormap=buildColormap;function getColormap(){var map=[];var index=[];for(var i=0;i<netsize;i++)index[network[i][3]]=i;var k=0;for(var l=0;l<netsize;l++){var j=index[l];map[k++]=network[j][0];map[k++]=network[j][1];map[k++]=network[j][2]}return map}this.getColormap=getColormap;this.lookupRGB=inxsearch}module.exports=NeuQuant},{}],4:[function(require,module,exports){var GIFEncoder,renderFrame;GIFEncoder=require("./GIFEncoder.js");renderFrame=function(frame){var encoder,page,stream,transfer;encoder=new GIFEncoder(frame.width,frame.height);if(frame.index===0){encoder.writeHeader()}else{encoder.firstFrame=false}encoder.setTransparent(frame.transparent);encoder.setRepeat(frame.repeat);encoder.setDelay(frame.delay);encoder.setQuality(frame.quality);encoder.setDither(frame.dither);encoder.setGlobalPalette(frame.globalPalette);encoder.addFrame(frame.data);if(frame.last){encoder.finish()}if(frame.globalPalette===true){frame.globalPalette=encoder.getGlobalPalette()}stream=encoder.stream();frame.data=stream.pages;frame.cursor=stream.cursor;frame.pageSize=stream.constructor.pageSize;if(frame.canTransfer){transfer=function(){var i,len,ref,results;ref=frame.data;results=[];for(i=0,len=ref.length;i<len;i++){page=ref[i];results.push(page.buffer)}return results}();return self.postMessage(frame,transfer)}else{return self.postMessage(frame)}};self.onmessage=function(event){return renderFrame(event.data)}},{"./GIFEncoder.js":1}]},{},[4]);//# sourceMappingURL=gif.worker.js.map    </script>    <style>        :root {            --primary-color: #f59e0b;            --secondary-color: #d97706;        }        .pixel-container {            background: white;            border-radius: 20px;            box-shadow: 0 15px 50px rgba(0,0,0,0.1);            padding: 30px;            margin: 20px 0;        }        .pixel-canvas {            border: 3px solid #e5e7eb;            border-radius: 15px;            background: #f8fafc;            overflow: hidden;        }        .tool-panel {            background: #f1f5f9;            border-radius: 15px;            padding: 20px;        }        .color-palette {            display: grid;            grid-template-columns: repeat(6, 1fr);            gap: 8px;            margin: 15px 0;        }        .color-cell {            width: 35px;            height: 35px;            border: 2px solid #e5e7eb;            border-radius: 8px;            cursor: pointer;            transition: all 0.3s ease;        }        .color-cell:hover {            transform: scale(1.1);            border-color: #374151;        }        .color-cell.active {            border-color: #000;            transform: scale(1.15);            box-shadow: 0 3px 10px rgba(0,0,0,0.2);        }        .pixel-grid {            display: grid;            gap: 0;            background: #fff;            border: 2px solid #e5e7eb;        }        .pixel {            border: 1px solid #e5e7eb;            cursor: pointer;            transition: all 0.1s ease;        }        .pixel:hover {            border-color: #374151;        }        .tool-btn {            width: 45px;            height: 45px;            border: 2px solid #e5e7eb;            border-radius: 10px;            display: flex;            align-items: center;            justify-content: center;            cursor: pointer;            transition: all 0.3s ease;            background: white;        }        .tool-btn:hover, .tool-btn.active {            border-color: var(--primary-color);            background: var(--primary-color);            color: white;            transform: translateY(-2px);        }        .preview-canvas {            border: 2px solid #e5e7eb;            border-radius: 10px;            background: white;        }        .animation-preview {            border: 2px solid #e5e7eb;            border-radius: 10px;            background: #f8fafc;            overflow: hidden;        }        .export-modal .modal-content {            border-radius: 15px;            border: none;        }        .export-option {            border: 2px solid #e5e7eb;            border-radius: 10px;            padding: 15px;            cursor: pointer;            transition: all 0.3s ease;        }        .export-option:hover {            border-color: var(--primary-color);            transform: translateY(-2px);        }        .export-option.active {            border-color: var(--primary-color);            background: rgba(245, 158, 11, 0.1);        }        .progress-bar {            height: 8px;            border-radius: 4px;            background: #e5e7eb;            overflow: hidden;        }        .progress-fill {            height: 100%;            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));            border-radius: 4px;            transition: width 0.3s ease;        }        .gif-preview {            max-width: 200px;            max-height: 200px;            border: 2px solid #e5e7eb;            border-radius: 10px;        }    </style>    <!-- Global site tag (gtag.js) - Google Analytics & Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BED9GZX87Z"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-BED9GZX87Z');
      gtag('config', 'AW-17357684990');
    </script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="pixel-container">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bold" style="color: var(--primary-color);">Advanced Pixel Art Drawer</h1>
                        <p class="lead text-muted">Create pixel art with advanced tools and animation</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="pixel-canvas p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="mb-0"><i class="fas fa-brush me-2"></i>Pixel Canvas</h5>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-primary btn-sm" id="zoomIn">
                                            <i class="fas fa-search-plus"></i>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="zoomOut">
                                            <i class="fas fa-search-minus"></i>
                                        </button>
                                        <button class="btn btn-outline-primary btn-sm" id="resetZoom">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="pixelGridContainer" class="d-flex justify-content-center">
                                    <!-- Pixel grid will be generated here -->
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h6 class="mb-0"><i class="fas fa-play-circle me-2"></i>Animation Frames</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex gap-2 mb-3">
                                                <button class="btn btn-sm btn-outline-primary" id="addFrame">
                                                    <i class="fas fa-plus me-1"></i>Add Frame
                                                </button>
                                                <button class="btn btn-sm btn-outline-primary" id="duplicateFrame">
                                                    <i class="fas fa-copy me-1"></i>Duplicate
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" id="deleteFrame">
                                                    <i class="fas fa-trash me-1"></i>Delete
                                                </button>
                                            </div>
                                            <div id="framesContainer" class="d-flex gap-2 flex-wrap">
                                                <!-- Animation frames will be added here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h6 class="mb-0"><i class="fas fa-film me-2"></i>Animation Preview</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="animation-preview mb-3" style="height: 100px;">
                                                <canvas id="animationPreview" width="200" height="100"></canvas>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <button class="btn btn-sm btn-success" id="playAnimation">
                                                    <i class="fas fa-play me-1"></i>Play
                                                </button>
                                                <button class="btn btn-sm btn-secondary" id="stopAnimation">
                                                    <i class="fas fa-stop me-1"></i>Stop
                                                </button>
                                                <input type="range" class="form-range" id="animationSpeed" min="1" max="10" value="5">
                                                <small class="text-muted" id="speedValue">5x</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="tool-panel">
                                <h5 class="mb-4"><i class="fas fa-tools me-2"></i>Tools & Colors</h5>

                                <div class="row g-2 mb-4">
                                    <div class="col-3">
                                        <div class="tool-btn active" data-tool="pencil">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="tool-btn" data-tool="bucket">
                                            <i class="fas fa-fill-drip"></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="tool-btn" data-tool="eraser">
                                            <i class="fas fa-eraser"></i>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="tool-btn" data-tool="picker">
                                            <i class="fas fa-eye-dropper"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Brush Size</label>
                                    <input type="range" class="form-range" id="brushSize" min="1" max="5" value="1">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Color Palette</label>
                                    <div class="color-palette" id="colorPalette">
                                        <!-- Colors will be added dynamically -->
                                    </div>
                                    <div class="d-flex gap-2 mt-2">
                                        <input type="color" class="form-control form-control-color" id="customColor" value="#f59e0b">
                                        <button class="btn btn-outline-primary" id="addColor">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Canvas Size</label>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <input type="number" class="form-control" id="gridWidth" value="32" min="8" max="128">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" class="form-control" id="gridHeight" value="32" min="8" max="128">
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary w-100 mt-2" id="resizeCanvas">
                                        <i class="fas fa-expand-alt me-1"></i>Resize Canvas
                                    </button>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Project</label>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-success" id="saveProject">
                                            <i class="fas fa-save me-1"></i>Save Project
                                        </button>
                                        <button class="btn btn-outline-info" id="loadProject">
                                            <i class="fas fa-folder-open me-1"></i>Load Project
                                        </button>
                                        <button class="btn btn-outline-danger" id="clearCanvas">
                                            <i class="fas fa-trash me-1"></i>Clear Canvas
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Export</label>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" id="exportPNG">
                                            <i class="fas fa-download me-1"></i>Export as PNG
                                        </button>
                                        <button class="btn btn-primary" id="exportGIF">
                                            <i class="fas fa-film me-1"></i>Export as GIF
                                        </button>
                                        <button class="btn btn-info" id="exportOptions">
                                            <i class="fas fa-cog me-1"></i>Export Settings
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Export Modal -->
    <div class="modal fade" id="exportModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-download me-2"></i>Export Options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="export-option active" data-format="gif">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-film fa-2x text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Animated GIF</h6>
                                        <small class="text-muted">Export all frames as animated GIF</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="export-option" data-format="png">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-image fa-2x text-success me-3"></i>
                                    <div>
                                        <h6 class="mb-1">PNG Image</h6>
                                        <small class="text-muted">Export current frame as PNG</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="gifSettings" class="mt-4">
                        <h6 class="mb-3">GIF Export Settings</h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Frame Delay (ms)</label>
                                <input type="number" class="form-control" id="frameDelay" value="100" min="20" max="1000">
                                <small class="text-muted">Delay between frames in milliseconds</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Loop Count</label>
                                <input type="number" class="form-control" id="loopCount" value="0" min="0" max="100">
                                <small class="text-muted">0 = infinite loop</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Scale Factor</label>
                                <select class="form-select" id="scaleFactor">
                                    <option value="1">1x (Original)</option>
                                    <option value="2">2x</option>
                                    <option value="3">3x</option>
                                    <option value="4">4x</option>
                                    <option value="5">5x</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Quality</label>
                                <select class="form-select" id="gifQuality">
                                    <option value="high">High Quality</option>
                                    <option value="medium" selected>Medium Quality</option>
                                    <option value="low">Low Quality</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="pngSettings" class="mt-4 d-none">
                        <h6 class="mb-3">PNG Export Settings</h6>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Scale Factor</label>
                                <select class="form-select" id="pngScale">
                                    <option value="1">1x (Original)</option>
                                    <option value="2">2x</option>
                                    <option value="3">3x</option>
                                    <option value="4">4x</option>
                                    <option value="5">5x</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Background</label>
                                <select class="form-select" id="pngBackground">
                                    <option value="transparent">Transparent</option>
                                    <option value="white">White</option>
                                    <option value="black">Black</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="mb-0">Preview</h6>
                            <small class="text-muted" id="fileSize">File size: -</small>
                        </div>
                        <div class="text-center">
                            <img id="exportPreview" class="gif-preview" alt="Export Preview">
                        </div>
                    </div>

                    <div class="mt-4" id="exportProgress" style="display: none;">
                        <label class="form-label">Export Progress</label>
                        <div class="progress-bar">
                            <div class="progress-fill" id="progressFill" style="width: 0%"></div>
                        </div>
                        <small class="text-muted" id="progressText">Preparing export...</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="generatePreview">
                        <i class="fas fa-sync me-1"></i>Generate Preview
                    </button>
                    <button type="button" class="btn btn-success" id="startExport">
                        <i class="fas fa-download me-1"></i>Export
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        class PixelArtDrawer {
            constructor() {
                this.gridSize = 32;
                this.pixelSize = 15;
                this.currentColor = '#f59e0b';
                this.currentTool = 'pencil';
                this.isDrawing = false;
                this.frames = [];
                this.currentFrame = 0;
                this.animationInterval = null;
                this.exportModal = new bootstrap.Modal(document.getElementById('exportModal'));
                this.currentExportFormat = 'gif';
                this.init();
            }

            init() {
                this.setupColorPalette();
                this.bindEvents();
                this.createNewFrame();
                this.generateGrid();
            }

            setupColorPalette() {
                const palette = document.getElementById('colorPalette');
                const defaultColors = [
                    '#000000', '#ffffff', '#ff0000', '#00ff00', '#0000ff',
                    '#ffff00', '#ff00ff', '#00ffff', '#ffa500', '#800080',
                    '#a52a2a', '#808080', '#ffc0cb', '#90ee90', '#add8e6'
                ];

                defaultColors.forEach(color => {
                    this.addColorToPalette(color);
                });
            }

            addColorToPalette(color) {
                const palette = document.getElementById('colorPalette');
                const colorCell = document.createElement('div');
                colorCell.className = 'color-cell';
                colorCell.style.backgroundColor = color;
                colorCell.dataset.color = color;

                colorCell.addEventListener('click', () => {
                    document.querySelectorAll('.color-cell').forEach(cell => cell.classList.remove('active'));
                    colorCell.classList.add('active');
                    this.currentColor = color;
                    document.getElementById('customColor').value = color;
                });

                palette.appendChild(colorCell);
            }

            bindEvents() {
                // Tool selection
                document.querySelectorAll('.tool-btn').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        document.querySelectorAll('.tool-btn').forEach(b => b.classList.remove('active'));
                        e.currentTarget.classList.add('active');
                        this.currentTool = e.currentTarget.dataset.tool;
                    });
                });

                // Color picker
                document.getElementById('customColor').addEventListener('input', (e) => {
                    this.currentColor = e.target.value;
                });

                // Add color to palette
                document.getElementById('addColor').addEventListener('click', () => {
                    this.addColorToPalette(this.currentColor);
                });

                // Canvas resize
                document.getElementById('resizeCanvas').addEventListener('click', () => {
                    const width = parseInt(document.getElementById('gridWidth').value);
                    const height = parseInt(document.getElementById('gridHeight').value);
                    this.resizeGrid(width, height);
                });

                // Frame management
                document.getElementById('addFrame').addEventListener('click', () => this.createNewFrame());
                document.getElementById('duplicateFrame').addEventListener('click', () => this.duplicateFrame());
                document.getElementById('deleteFrame').addEventListener('click', () => this.deleteFrame());

                // Animation controls
                document.getElementById('playAnimation').addEventListener('click', () => this.playAnimation());
                document.getElementById('stopAnimation').addEventListener('click', () => this.stopAnimation());
                document.getElementById('animationSpeed').addEventListener('input', (e) => {
                    document.getElementById('speedValue').textContent = e.target.value + 'x';
                    if (this.animationInterval) {
                        this.stopAnimation();
                        this.playAnimation();
                    }
                });

                // Export buttons
                document.getElementById('exportPNG').addEventListener('click', () => this.exportAsPNG());
                document.getElementById('exportGIF').addEventListener('click', () => this.showExportModal());
                document.getElementById('exportOptions').addEventListener('click', () => this.showExportModal());

                // Project management
                document.getElementById('saveProject').addEventListener('click', () => this.saveProject());
                document.getElementById('loadProject').addEventListener('click', () => this.loadProject());
                document.getElementById('clearCanvas').addEventListener('click', () => this.clearCurrentFrame());

                // Zoom controls
                document.getElementById('zoomIn').addEventListener('click', () => this.zoom(1.2));
                document.getElementById('zoomOut').addEventListener('click', () => this.zoom(0.8));
                document.getElementById('resetZoom').addEventListener('click', () => this.resetZoom());

                // Export modal events
                this.setupExportModal();
            }

            setupExportModal() {
                // Format selection
                document.querySelectorAll('.export-option').forEach(option => {
                    option.addEventListener('click', (e) => {
                        document.querySelectorAll('.export-option').forEach(opt => opt.classList.remove('active'));
                        e.currentTarget.classList.add('active');
                        this.currentExportFormat = e.currentTarget.dataset.format;
                        
                        // Show/hide settings based on format
                        if (this.currentExportFormat === 'gif') {
                            document.getElementById('gifSettings').classList.remove('d-none');
                            document.getElementById('pngSettings').classList.add('d-none');
                        } else {
                            document.getElementById('gifSettings').classList.add('d-none');
                            document.getElementById('pngSettings').classList.remove('d-none');
                        }
                    });
                });

                // Generate preview
                document.getElementById('generatePreview').addEventListener('click', () => this.generatePreview());
                
                // Start export
                document.getElementById('startExport').addEventListener('click', () => this.startExport());
            }

            showExportModal() {
                this.exportModal.show();
                this.generatePreview();
            }

            generatePreview() {
                if (this.currentExportFormat === 'gif') {
                    this.generateGifPreview();
                } else {
                    this.generatePngPreview();
                }
            }

            generateGifPreview() {
                const preview = document.getElementById('exportPreview');
                preview.src = '';
                
                // Create a simple preview from first frame
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                const scale = parseInt(document.getElementById('scaleFactor').value);
                
                canvas.width = this.gridSize * scale;
                canvas.height = this.gridSize * scale;
                
                const frame = this.frames[0].data;
                for (let y = 0; y < this.gridSize; y++) {
                    for (let x = 0; x < this.gridSize; x++) {
                        ctx.fillStyle = frame[y][x];
                        ctx.fillRect(x * scale, y * scale, scale, scale);
                    }
                }
                
                preview.src = canvas.toDataURL('image/png');
                document.getElementById('fileSize').textContent = 'Preview: First frame shown';
            }

            generatePngPreview() {
                const preview = document.getElementById('exportPreview');
                const scale = parseInt(document.getElementById('pngScale').value);
                const background = document.getElementById('pngBackground').value;
                
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                canvas.width = this.gridSize * scale;
                canvas.height = this.gridSize * scale;
                
                // Set background
                if (background === 'white') {
                    ctx.fillStyle = '#ffffff';
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                } else if (background === 'black') {
                    ctx.fillStyle = '#000000';
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                }
                // Transparent background remains transparent
                
                const frame = this.frames[this.currentFrame].data;
                for (let y = 0; y < this.gridSize; y++) {
                    for (let x = 0; x < this.gridSize; x++) {
                        if (frame[y][x] !== '#ffffff' || background !== 'transparent') {
                            ctx.fillStyle = frame[y][x];
                            ctx.fillRect(x * scale, y * scale, scale, scale);
                        }
                    }
                }
                
                preview.src = canvas.toDataURL('image/png');
                document.getElementById('fileSize').textContent = 'Preview: Current frame shown';
            }

            async startExport() {
                if (this.currentExportFormat === 'gif') {
                    await this.exportAsGIF();
                } else {
                    this.exportAsPNG();
                }
            }

            async exportAsGIF() {
                const frameDelay = parseInt(document.getElementById('frameDelay').value);
                const loopCount = parseInt(document.getElementById('loopCount').value);
                const scale = parseInt(document.getElementById('scaleFactor').value);
                const quality = document.getElementById('gifQuality').value;
                
                // Show progress
                const progressFill = document.getElementById('progressFill');
                const progressText = document.getElementById('progressText');
                const exportProgress = document.getElementById('exportProgress');
                
                exportProgress.style.display = 'block';
                progressFill.style.width = '0%';
                progressText.textContent = 'Initializing GIF encoder...';
                
                try {
                    // Create a temporary canvas for scaling
                    const tempCanvas = document.createElement('canvas');
                    const tempCtx = tempCanvas.getContext('2d');
                    tempCanvas.width = this.gridSize * scale;
                    tempCanvas.height = this.gridSize * scale;
                    
                    // Configure GIF encoder
                    const gif = new GIF({
                        workers: 2,
                        quality: quality === 'high' ? 10 : quality === 'medium' ? 20 : 30,
                        workerScript: './gif.js',
                        width: tempCanvas.width,
                        height: tempCanvas.height,
                        transparent: '0x00000000'
                    });
                    
                    let processedFrames = 0;
                    const totalFrames = this.frames.length;
                    
                    // Add frames to GIF
                    for (let i = 0; i < this.frames.length; i++) {
                        const frame = this.frames[i].data;
                        
                        // Clear and draw scaled frame
                        tempCtx.clearRect(0, 0, tempCanvas.width, tempCanvas.height);
                        for (let y = 0; y < this.gridSize; y++) {
                            for (let x = 0; x < this.gridSize; x++) {
                                tempCtx.fillStyle = frame[y][x];
                                tempCtx.fillRect(x * scale, y * scale, scale, scale);
                            }
                        }
                        
                        // Add frame to GIF
                        gif.addFrame(tempCtx, { copy: true, delay: frameDelay });
                        
                        processedFrames++;
                        const progress = (processedFrames / totalFrames) * 100;
                        progressFill.style.width = `${progress}%`;
                        progressText.textContent = `Processing frame ${processedFrames} of ${totalFrames}...`;
                        
                        // Small delay to allow UI update
                        await new Promise(resolve => setTimeout(resolve, 10));
                    }
                    
                    progressText.textContent = 'Finalizing GIF...';
                    
                    // Render GIF
                    gif.on('finished', (blob) => {
                        progressFill.style.width = '100%';
                        progressText.textContent = 'GIF created successfully!';
                        
                        // Create download link
                        const url = URL.createObjectURL(blob);
                        const link = document.createElement('a');
                        link.download = `pixel-art-${Date.now()}.gif`;
                        link.href = url;
                        link.click();
                        
                        // Clean up
                        setTimeout(() => {
                            URL.revokeObjectURL(url);
                            this.exportModal.hide();
                            exportProgress.style.display = 'none';
                        }, 1000);
                    });
                    
                    gif.on('progress', (p) => {
                        const renderProgress = 50 + (p * 50); // Last 50% of progress
                        progressFill.style.width = `${renderProgress}%`;
                        progressText.textContent = `Rendering GIF... ${Math.round(p * 100)}%`;
                    });
                    
                    gif.render();
                    
                } catch (error) {
                    console.error('GIF export error:', error);
                    progressText.textContent = 'Error creating GIF: ' + error.message;
                    progressFill.style.background = '#dc3545';
                }
            }

            exportAsPNG() {
                const scale = parseInt(document.getElementById('pngScale').value);
                const background = document.getElementById('pngBackground').value;
                
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                canvas.width = this.gridSize * scale;
                canvas.height = this.gridSize * scale;
                
                // Set background
                if (background === 'white') {
                    ctx.fillStyle = '#ffffff';
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                } else if (background === 'black') {
                    ctx.fillStyle = '#000000';
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                }
                // Transparent background remains transparent
                
                const frame = this.frames[this.currentFrame].data;
                for (let y = 0; y < this.gridSize; y++) {
                    for (let x = 0; x < this.gridSize; x++) {
                        if (frame[y][x] !== '#ffffff' || background !== 'transparent') {
                            ctx.fillStyle = frame[y][x];
                            ctx.fillRect(x * scale, y * scale, scale, scale);
                        }
                    }
                }
                
                const link = document.createElement('a');
                link.download = `pixel-art-${Date.now()}.png`;
                link.href = canvas.toDataURL('image/png');
                link.click();
                
                this.exportModal.hide();
            }

            generateGrid() {
                const container = document.getElementById('pixelGridContainer');
                container.innerHTML = '';

                const grid = document.createElement('div');
                grid.className = 'pixel-grid';
                grid.style.gridTemplateColumns = `repeat(${this.gridSize}, ${this.pixelSize}px)`;
                grid.style.gridTemplateRows = `repeat(${this.gridSize}, ${this.pixelSize}px)`;

                for (let y = 0; y < this.gridSize; y++) {
                    for (let x = 0; x < this.gridSize; x++) {
                        const pixel = document.createElement('div');
                        pixel.className = 'pixel';
                        pixel.dataset.x = x;
                        pixel.dataset.y = y;
                        pixel.style.width = `${this.pixelSize}px`;
                        pixel.style.height = `${this.pixelSize}px`;
                        pixel.style.backgroundColor = this.frames[this.currentFrame].data[y][x];

                        pixel.addEventListener('mousedown', (e) => this.handlePixelClick(e, x, y));
                        pixel.addEventListener('mouseover', (e) => {
                            if (e.buttons === 1) {
                                this.handlePixelClick(e, x, y);
                            }
                        });

                        grid.appendChild(pixel);
                    }
                }

                container.appendChild(grid);
            }

            handlePixelClick(e, x, y) {
                const frame = this.frames[this.currentFrame];

                switch (this.currentTool) {
                    case 'pencil':
                        frame.data[y][x] = this.currentColor;
                        break;
                    case 'eraser':
                        frame.data[y][x] = '#ffffff';
                        break;
                    case 'bucket':
                        this.floodFill(x, y, frame.data[y][x], this.currentColor, frame.data);
                        break;
                    case 'picker':
                        this.currentColor = frame.data[y][x];
                        document.getElementById('customColor').value = this.currentColor;
                        document.querySelectorAll('.color-cell').forEach(cell => {
                            if (cell.dataset.color === this.currentColor) {
                                cell.classList.add('active');
                            } else {
                                cell.classList.remove('active');
                            }
                        });
                        return;
                }

                this.updatePixelDisplay(x, y, frame.data[y][x]);
                this.updateAnimationPreview();
            }

            floodFill(x, y, targetColor, replacementColor, grid) {
                if (targetColor === replacementColor) return;
                if (grid[y][x] !== targetColor) return;

                grid[y][x] = replacementColor;

                // Recursively fill adjacent pixels
                if (x > 0) this.floodFill(x - 1, y, targetColor, replacementColor, grid);
                if (x < this.gridSize - 1) this.floodFill(x + 1, y, targetColor, replacementColor, grid);
                if (y > 0) this.floodFill(x, y - 1, targetColor, replacementColor, grid);
                if (y < this.gridSize - 1) this.floodFill(x, y + 1, targetColor, replacementColor, grid);

                // Update entire grid after flood fill
                this.generateGrid();
            }

            updatePixelDisplay(x, y, color) {
                const pixel = document.querySelector(`.pixel[data-x="${x}"][data-y="${y}"]`);
                if (pixel) {
                    pixel.style.backgroundColor = color;
                }
            }

            createNewFrame() {
                const frame = {
                    id: Date.now(),
                    name: `Frame ${this.frames.length + 1}`,
                    data: Array(this.gridSize).fill().map(() => Array(this.gridSize).fill('#ffffff'))
                };
                this.frames.push(frame);
                this.currentFrame = this.frames.length - 1;
                this.updateFramesDisplay();
                this.generateGrid();
            }

            duplicateFrame() {
                const currentFrameData = JSON.parse(JSON.stringify(this.frames[this.currentFrame].data));
                const frame = {
                    id: Date.now(),
                    name: `Frame ${this.frames.length + 1}`,
                    data: currentFrameData
                };
                this.frames.push(frame);
                this.currentFrame = this.frames.length - 1;
                this.updateFramesDisplay();
                this.generateGrid();
            }

            deleteFrame() {
                if (this.frames.length > 1) {
                    this.frames.splice(this.currentFrame, 1);
                    this.currentFrame = Math.min(this.currentFrame, this.frames.length - 1);
                    this.updateFramesDisplay();
                    this.generateGrid();
                }
            }

            updateFramesDisplay() {
                const container = document.getElementById('framesContainer');
                container.innerHTML = '';

                this.frames.forEach((frame, index) => {
                    const frameDiv = document.createElement('div');
                    frameDiv.className = `frame-thumbnail border rounded p-1 ${index === this.currentFrame ? 'border-primary' : 'border-secondary'}`;
                    frameDiv.style.cursor = 'pointer';
                    frameDiv.style.width = '60px';
                    frameDiv.style.height = '60px';
                    frameDiv.style.background = 'white';

                    // Create mini canvas for frame thumbnail
                    const canvas = document.createElement('canvas');
                    canvas.width = this.gridSize;
                    canvas.height = this.gridSize;
                    canvas.style.width = '100%';
                    canvas.style.height = '100%';
                    canvas.style.imageRendering = 'pixelated';

                    const ctx = canvas.getContext('2d');
                    for (let y = 0; y < this.gridSize; y++) {
                        for (let x = 0; x < this.gridSize; x++) {
                            ctx.fillStyle = frame.data[y][x];
                            ctx.fillRect(x, y, 1, 1);
                        }
                    }

                    frameDiv.appendChild(canvas);
                    frameDiv.addEventListener('click', () => {
                        this.currentFrame = index;
                        this.updateFramesDisplay();
                        this.generateGrid();
                    });

                    container.appendChild(frameDiv);
                });
            }

            playAnimation() {
                this.stopAnimation();
                const speed = 1000 / document.getElementById('animationSpeed').value;
                let frameIndex = 0;

                this.animationInterval = setInterval(() => {
                    this.renderAnimationFrame(frameIndex);
                    frameIndex = (frameIndex + 1) % this.frames.length;
                }, speed);
            }

            stopAnimation() {
                if (this.animationInterval) {
                    clearInterval(this.animationInterval);
                    this.animationInterval = null;
                }
            }

            renderAnimationFrame(frameIndex) {
                const canvas = document.getElementById('animationPreview');
                const ctx = canvas.getContext('2d');
                const frame = this.frames[frameIndex];

                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                const pixelSize = Math.min(canvas.width / this.gridSize, canvas.height / this.gridSize);
                
                for (let y = 0; y < this.gridSize; y++) {
                    for (let x = 0; x < this.gridSize; x++) {
                        ctx.fillStyle = frame.data[y][x];
                        ctx.fillRect(x * pixelSize, y * pixelSize, pixelSize, pixelSize);
                    }
                }
            }

            updateAnimationPreview() {
                this.renderAnimationFrame(this.currentFrame);
            }

            resizeGrid(width, height) {
                this.gridSize = Math.max(8, Math.min(128, Math.max(width, height)));
                
                // Resize all frames
                this.frames.forEach(frame => {
                    const newData = Array(this.gridSize).fill().map(() => Array(this.gridSize).fill('#ffffff'));
                    
                    for (let y = 0; y < Math.min(this.gridSize, frame.data.length); y++) {
                        for (let x = 0; x < Math.min(this.gridSize, frame.data[0].length); x++) {
                            newData[y][x] = frame.data[y][x];
                        }
                    }
                    
                    frame.data = newData;
                });

                this.generateGrid();
                this.updateFramesDisplay();
                this.updateAnimationPreview();
            }

            zoom(factor) {
                this.pixelSize = Math.max(5, Math.min(50, this.pixelSize * factor));
                this.generateGrid();
            }

            resetZoom() {
                this.pixelSize = 15;
                this.generateGrid();
            }

            clearCurrentFrame() {
                this.frames[this.currentFrame].data = Array(this.gridSize).fill().map(() => Array(this.gridSize).fill('#ffffff'));
                this.generateGrid();
                this.updateAnimationPreview();
            }

            saveProject() {
                const project = {
                    frames: this.frames,
                    gridSize: this.gridSize,
                    colors: Array.from(document.querySelectorAll('.color-cell')).map(cell => cell.dataset.color)
                };

                const data = JSON.stringify(project);
                const blob = new Blob([data], { type: 'application/json' });
                const url = URL.createObjectURL(blob);

                const link = document.createElement('a');
                link.download = `pixel-art-project-${Date.now()}.json`;
                link.href = url;
                link.click();
            }

            loadProject() {
                const input = document.createElement('input');
                input.type = 'file';
                input.accept = '.json';
                input.onchange = (e) => {
                    const file = e.target.files[0];
                    const reader = new FileReader();
                    
                    reader.onload = (event) => {
                        try {
                            const project = JSON.parse(event.target.result);
                            this.frames = project.frames;
                            this.gridSize = project.gridSize;
                            this.currentFrame = 0;

                            // Restore color palette
                            document.getElementById('colorPalette').innerHTML = '';
                            project.colors.forEach(color => this.addColorToPalette(color));

                            this.generateGrid();
                            this.updateFramesDisplay();
                            this.updateAnimationPreview();
                        } catch (error) {
                            alert('Error loading project: ' + error.message);
                        }
                    };
                    
                    reader.readAsText(file);
                };
                
                input.click();
            }
        }

        // Initialize Pixel Art Drawer
        const pixelArt = new PixelArtDrawer();
    </script>
</body>
</html>