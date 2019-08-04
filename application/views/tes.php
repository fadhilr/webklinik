<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data" target="uploadTarget" onsubmit="startUpload();" >
    <p id="uploadProcess">Uploading...<br/><img src="assets/loader.gif" /><br/></p>
    <p id="uploadForm" align="center"><br/>
        <label>
            File: <input name="myfile" type="file" size="30" />
        </label>
        <label>
            <input type="submit" name="submitBtn" class="sbtn" value="Upload" />
        </label>
    </p>
    <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
</form>
<!-- Uploaded file preview -->
<div>
    <embed id="UploadedFile" src="" width="390px" height="160px">
</div>
</body>

<script type="text/javascript">
    <script type="text/javascript">
function startUpload(){
    document.getElementById('uploadProcess').style.visibility = 'visible';
    document.getElementById('uploadForm').style.visibility = 'hidden';
    return true;
}

function stopUpload(success,uploadedFile){
    var result = '';
    if (success == 1){
        result = '<span class="sucess-msg">The file was uploaded successfully!<\/span><br/><br/>';
        //Uploaded file preview
        var embed = document.getElementById("UploadedFile");
        var clone = embed.cloneNode(true);
        clone.setAttribute('src',uploadedFile);
        embed.parentNode.replaceChild(clone,embed);
    }else {
       result = '<span class="error-msg">There was an error during file upload!<\/span><br/><br/>';
    }
    document.getElementById('uploadProcess').style.visibility = 'hidden';
    document.getElementById('uploadForm').innerHTML = result + '<label>File: <input name="myfile" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
    document.getElementById('uploadForm').style.visibility = 'visible';      
    return true;   
}
</script>
</script>
</html>