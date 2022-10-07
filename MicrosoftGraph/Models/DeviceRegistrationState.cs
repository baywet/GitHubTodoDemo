namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum DeviceRegistrationState {
        /// <summary>The device is not registered.</summary>
        NotRegistered,
        /// <summary>The device is registered.</summary>
        Registered,
        /// <summary>The device has been blocked, wiped or retired.</summary>
        Revoked,
        /// <summary>The device has a key conflict.</summary>
        KeyConflict,
        /// <summary>The device is pending approval.</summary>
        ApprovalPending,
        /// <summary>The device certificate has been reset.</summary>
        CertificateReset,
        /// <summary>The device is not registered and pending enrollment.</summary>
        NotRegisteredPendingEnrollment,
        /// <summary>The device registration status is unknown.</summary>
        Unknown,
    }
}