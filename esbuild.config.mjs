import * as esbuild from "esbuild";

await esbuild.build({
	entryPoints: ["src/ts/main.ts"],
	bundle: true,
	outfile: "web/assets/js/main.js",
	minify: true,
	sourcemap: true,
});
