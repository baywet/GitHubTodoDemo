namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public enum AccessPackageRequestType {
        NotSpecified,
        UserAdd,
        UserUpdate,
        UserRemove,
        AdminAdd,
        AdminUpdate,
        AdminRemove,
        SystemAdd,
        SystemUpdate,
        SystemRemove,
        OnBehalfAdd,
        UnknownFutureValue,
    }
}
