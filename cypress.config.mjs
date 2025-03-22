import { defineConfig } from 'cypress';

export default defineConfig({
  e2e: {
    baseUrl: 'http://blog.test',
    specPattern: 'cypress/e2e/**/*.cy.js',
    supportFile: false,
  },
});
