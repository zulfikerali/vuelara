<template>
    <div class="container">
        <Body></Body>
    </div>
</template>

<script>
import Body from "./Body";
export default {
    mounted() {
        console.log("Component mounted.");
    },
    components: {
        Body
    }
};
</script>

<style></style>
