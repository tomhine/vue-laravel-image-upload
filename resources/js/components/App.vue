<script>
import vueFilePond from "vue-filepond";
import "filepond/dist/filepond.min.css";

const FilePond = vueFilePond();

export default {
    components: { FilePond },
};
</script>

<template>
    <div class="mt-4">
        <file-pond
            name="image"
            label-idle="Click to choose image, or drag here..."
            server="/upload"
            ref="pond"
        />
    </div>
</template>
