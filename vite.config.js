import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { readdirSync } from 'fs';
import { join } from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: getFiles('resources/css', 'resources/js'),
            refresh: true,
        }),
    ],
});

function getFiles(...directories) {
    return directories.reduce((files, directory) => {
        const directoryPath = join(process.cwd(), directory);
        const filesInDirectory = readdirSync(directoryPath)
            .filter(file => file.endsWith('.css') || file.endsWith('.js'))
            .map(file => join(directoryPath, file));

        return [...files, ...filesInDirectory];
    }, []);
}
