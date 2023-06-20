# GitHub To-Do console app integration demo with Kiota (java)

## Pre-reqs

1. Windows terminal `winget install Microsoft.WindowsTerminal`.
1. PowerShell core `winget install Microsoft.PowerShell`.
1. Dotnet `winget install Microsoft.DotNet.SDK.7`.
1. Kiota installed `dotnet tool install -g Microsoft.OpenAPI.Kiota --prerelease`.
1. Java `winget install EclipseAdoptium.Temurin.18.JDK`.
1. VSCode `winget install Microsoft.VisualStudioCode`.
1. Edit the following configuration file `%USERPROFILE%\.dotnet\tools\.store\microsoft.openapi.kiota\<kiota-version>\microsoft.openapi.kiota\<kiota-version>\tools\net7.0\any\appsettings.json` to contain the following entry under `Generation`.

   ```json
   "DisabledValidationRules": ["all"]
   ```

1. A repository with a couple of pull requests open.
1. A developer tenant for office 365.
1. A [GitHub app](https://github.com/settings/applications/new) (check enable device flow).
1. [This repo](https://github.com/baywet/GitHubTodoDemo) cloned locally.
1. A blank console application. /!\ No space, underscore, dashes in last directory name. /!\

   ```shell
   gradle init
   # application, java, no subprojects, groovy, junit jupiter, GitHubTodoDemo, githubtododemo, 18, no
   ```

1. Copy the **.vscode** directory to add debug and build configuration.
1. Make sure you install the recommended extensions (type `@recommended` in the extensions search bar, and install all the `Workspace recommendations`).
1. TODO GITHUB AUTHENTICATION CODE COPY
1. TODO AUTHENTICATION CONSTANTS

## Getting ready

1. [Todo open](https://to-do.office.com/tasks/inbox)
1. [Device login](https://www.microsoft.com/devicelogin)
1. Code open to the blank console application.
1. A windows terminal open with PowerShell core cd'ed into the dotnet project repository.

