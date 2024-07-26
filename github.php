const { exec } = require('child_process');

// Execute the git pull command
exec('git pull', (error, stdout, stderr) => {
    if (error) {
        console.error(`Error executing git pull: ${error.message}`);
        return;
    }

    if (stderr) {
        console.error(`Error output: ${stderr}`);
        return;
    }

    console.log(`Output: ${stdout}`);
});
