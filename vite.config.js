import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    build: {
        outDir: "dist",
        assetsDir: "",
        emptyOutDir: true,
        manifest: true
    },
    plugins: [tailwindcss()]
});
