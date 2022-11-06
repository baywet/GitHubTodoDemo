namespace GitHubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum ManagedAppDataEncryptionType {
        /// <summary>App data is encrypted based on the default settings on the device.</summary>
        UseDeviceSettings,
        /// <summary>App data is encrypted when the device is restarted.</summary>
        AfterDeviceRestart,
        /// <summary>App data associated with this policy is encrypted when the device is locked, except data in files that are open</summary>
        WhenDeviceLockedExceptOpenFiles,
        /// <summary>App data associated with this policy is encrypted when the device is locked</summary>
        WhenDeviceLocked,
    }
}
